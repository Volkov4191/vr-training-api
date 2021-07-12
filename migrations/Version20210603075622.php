<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210603075622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE step_type AUTO_INCREMENT = 1");
        $this->addSql("INSERT INTO `step_type` (`name`, `code`, `sort`, `is_active`, `is_deleted`, `created_at`) VALUES ('Неопределенный', 'undefined', '500', '1', '0', CURRENT_TIMESTAMP);");
        $this->addSql("INSERT INTO `step_type` (`name`, `code`, `sort`, `is_active`, `is_deleted`, `created_at`) VALUES ('Диалог', 'dialog', '500', '1', '0', CURRENT_TIMESTAMP);");
        $this->addSql("INSERT INTO `step_type` (`name`, `code`, `sort`, `is_active`, `is_deleted`, `created_at`) VALUES ('Перевод списка объектов в нужный статус', 'objects-to-status', '500', '1', '0', CURRENT_TIMESTAMP);");

        $this->addSql('ALTER TABLE step ADD type_id INT NOT NULL  DEFAULT 1 AFTER stage_id');
        $this->addSql('ALTER TABLE step ADD CONSTRAINT FK_43B9FE3CC54C8C93 FOREIGN KEY (type_id) REFERENCES step_type (id)');
        $this->addSql('CREATE INDEX IDX_43B9FE3CC54C8C93 ON step (type_id)');
    }

    public function down(Schema $schema): void
    {

        $this->addSql('ALTER TABLE step DROP FOREIGN KEY FK_43B9FE3CC54C8C93');
        $this->addSql('DROP INDEX IDX_43B9FE3CC54C8C93 ON step');
        $this->addSql('ALTER TABLE step DROP type_id');
    }
}
