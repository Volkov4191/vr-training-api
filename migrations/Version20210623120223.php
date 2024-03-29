<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210623120223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs


        $this->addSql('ALTER TABLE step ADD video_id VARCHAR(255) DEFAULT NULL AFTER description');
        $this->addSql("ALTER TABLE `step` CHANGE COLUMN `video_id` `video_id` VARCHAR(255) CHARACTER SET 'utf8' NULL DEFAULT NULL ;");
        $this->addSql('ALTER TABLE step ADD CONSTRAINT FK_43B9FE3C29C1004E FOREIGN KEY (video_id) REFERENCES TourVideoData (id)');
        $this->addSql('CREATE INDEX IDX_43B9FE3C29C1004E ON step (video_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
         $this->addSql('ALTER TABLE step DROP FOREIGN KEY FK_43B9FE3C29C1004E');
        $this->addSql('DROP INDEX IDX_43B9FE3C29C1004E ON step');
        $this->addSql('ALTER TABLE step DROP video_id');
    }
}
