<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210709054937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE `TourVideoData` ADD UNIQUE INDEX `ID_UNIQUE` (`ID` ASC);");
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("ALTER TABLE detailed_object_target_status ADD video_id VARCHAR(255) CHARACTER SET 'utf8' NULL DEFAULT NULL AFTER status_id");
        $this->addSql('ALTER TABLE detailed_object_target_status ADD CONSTRAINT FK_13A86F7129C1004E FOREIGN KEY (video_id) REFERENCES TourVideoData (ID)');
        $this->addSql('CREATE INDEX IDX_13A86F7129C1004E ON detailed_object_target_status (video_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE detailed_object_target_status DROP FOREIGN KEY FK_13A86F7129C1004E');
        $this->addSql('DROP INDEX IDX_13A86F7129C1004E ON detailed_object_target_status');
        $this->addSql('ALTER TABLE detailed_object_target_status DROP video_id, CHANGE object_id object_id VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE status_id status_id VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE step_id step_id INT NOT NULL');
    }
}
