<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20130909151835 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Category CHANGE study study INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Category ADD CONSTRAINT FK_FF3A7B97E67F9749 FOREIGN KEY (study) REFERENCES Study (id)");
        $this->addSql("CREATE INDEX IDX_FF3A7B97E67F9749 ON Category (study)");
        $this->addSql("ALTER TABLE Data CHANGE value value INT NOT NULL, CHANGE question question INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Data ADD CONSTRAINT FK_DC15C5DB6F7494E FOREIGN KEY (question) REFERENCES Question (id)");
        $this->addSql("CREATE INDEX IDX_DC15C5DB6F7494E ON Data (question)");
        $this->addSql("ALTER TABLE Question CHANGE category category INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Question ADD CONSTRAINT FK_4F812B1864C19C1 FOREIGN KEY (category) REFERENCES Category (id)");
        $this->addSql("CREATE INDEX IDX_4F812B1864C19C1 ON Question (category)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE Category DROP FOREIGN KEY FK_FF3A7B97E67F9749");
        $this->addSql("DROP INDEX IDX_FF3A7B97E67F9749 ON Category");
        $this->addSql("ALTER TABLE Category CHANGE study study INT NOT NULL");
        $this->addSql("ALTER TABLE Data DROP FOREIGN KEY FK_DC15C5DB6F7494E");
        $this->addSql("DROP INDEX IDX_DC15C5DB6F7494E ON Data");
        $this->addSql("ALTER TABLE Data CHANGE question question INT NOT NULL, CHANGE value value NUMERIC(5, 2) NOT NULL");
        $this->addSql("ALTER TABLE Question DROP FOREIGN KEY FK_4F812B1864C19C1");
        $this->addSql("DROP INDEX IDX_4F812B1864C19C1 ON Question");
        $this->addSql("ALTER TABLE Question CHANGE category category INT NOT NULL");
    }
}
