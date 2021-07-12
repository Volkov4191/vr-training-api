<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210617135935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE dialog_message (id INT AUTO_INCREMENT NOT NULL, dialog_id INT NOT NULL, from_role VARCHAR(255) NOT NULL, author_name VARCHAR(255) NOT NULL, correct_phrase LONGTEXT NOT NULL, wrong_phrase LONGTEXT NOT NULL, sort INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_9BAC30205E46C4E2 (dialog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dialog_message ADD CONSTRAINT FK_9BAC30205E46C4E2 FOREIGN KEY (dialog_id) REFERENCES dialog (id)');
        $this->addSql('CREATE INDEX FK_13A86F71232D562B ON detailed_object_target_status (object_id)');
        $this->addSql('CREATE INDEX FK_13A86F716BF700BD ON detailed_object_target_status (status_id)');
        $this->addSql('ALTER TABLE scenario CHANGE status_id status_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE dialog_message');
        $this->addSql('DROP INDEX FK_13A86F71232D562B ON detailed_object_target_status');
        $this->addSql('DROP INDEX FK_13A86F716BF700BD ON detailed_object_target_status');
        $this->addSql('ALTER TABLE scenario CHANGE status_id status_id INT DEFAULT 1 NOT NULL');
    }
}
