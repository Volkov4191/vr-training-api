<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210622090817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE detailed_object_target_range (id INT AUTO_INCREMENT NOT NULL, step_id INT NOT NULL, object_id VARCHAR(255) CHARACTER SET utf8 NOT NULL, value_from DOUBLE PRECISION DEFAULT NULL, value_to DOUBLE PRECISION DEFAULT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_E63ECF9B73B21E9C (step_id), INDEX IDX_E63ECF9B232D562B (object_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE detailed_object_target_range ADD CONSTRAINT FK_E63ECF9B73B21E9C FOREIGN KEY (step_id) REFERENCES step (id)');
        $this->addSql('ALTER TABLE detailed_object_target_range ADD CONSTRAINT FK_E63ECF9B232D562B FOREIGN KEY (object_id) REFERENCES DetailedObjectData (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE detailed_object_target_range');
    }
}
