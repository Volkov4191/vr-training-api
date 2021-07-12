<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210629075840 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE `LocationData` ADD UNIQUE INDEX `ID_UNIQUE` (`ID` ASC);");
        $this->addSql("ALTER TABLE step ADD location_id VARCHAR(255) CHARACTER SET 'utf8' NULL DEFAULT NULL AFTER video_id, CHANGE stage_id stage_id INT DEFAULT NULL, CHANGE type_id type_id INT DEFAULT NULL");
        $this->addSql('ALTER TABLE step ADD CONSTRAINT FK_43B9FE3C64D218E FOREIGN KEY (location_id) REFERENCES LocationData (id)');
        $this->addSql('CREATE INDEX IDX_43B9FE3C64D218E ON step (location_id)');

        $this->addSql("UPDATE `step` SET `location_id` = 'cba8c066-f2ae-4913-a1fe-d458d6c655b0' WHERE (`id` > '0');");
        $this->addSql("UPDATE `step` SET `location_id` = '5ae394fc-99c0-4fad-8278-e62fb00f03e5' WHERE (`id` in (3,4,10,11, 14, 16, 17, 15, 20, 21, 22, 23, 24,25));");

    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE step DROP FOREIGN KEY FK_43B9FE3C64D218E');
        $this->addSql('DROP INDEX IDX_43B9FE3C64D218E ON step');
        $this->addSql('ALTER TABLE step DROP location_id, CHANGE stage_id stage_id INT NOT NULL, CHANGE type_id type_id INT NOT NULL');
    }
}
