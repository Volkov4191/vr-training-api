<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210709083810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE step_animation (id INT AUTO_INCREMENT NOT NULL, step_id INT NOT NULL, object_id VARCHAR(255) CHARACTER SET "utf8" NULL  NOT NULL, from_status_id VARCHAR(255) CHARACTER SET "utf8" NULL  NOT NULL, to_status_id VARCHAR(255) CHARACTER SET "utf8" NULL  NOT NULL, duration INT NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_506FFD1773B21E9C (step_id), INDEX IDX_506FFD17232D562B (object_id), INDEX IDX_506FFD177B6B9507 (from_status_id), INDEX IDX_506FFD175A54D7CC (to_status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE step_animation ADD CONSTRAINT FK_506FFD1773B21E9C FOREIGN KEY (step_id) REFERENCES step (id)');
        $this->addSql('ALTER TABLE step_animation ADD CONSTRAINT FK_506FFD17232D562B FOREIGN KEY (object_id) REFERENCES DetailedObjectData (id)');
        $this->addSql('ALTER TABLE step_animation ADD CONSTRAINT FK_506FFD177B6B9507 FOREIGN KEY (from_status_id) REFERENCES StatusData (id)');
        $this->addSql('ALTER TABLE step_animation ADD CONSTRAINT FK_506FFD175A54D7CC FOREIGN KEY (to_status_id) REFERENCES StatusData (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE step_animation');
    }
}
