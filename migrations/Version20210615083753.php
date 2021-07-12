<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210615083753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO `scenario_status` (`name`, `code`, `is_active`, `is_deleted`) VALUES ('В работе', 'in-progress', '1', '0')");
        $this->addSql("INSERT INTO `scenario_status` (`name`, `code`, `is_active`, `is_deleted`) VALUES ('На проверке', 'on-review', '1', '0')");
        $this->addSql("INSERT INTO `scenario_status` (`name`, `code`, `is_active`, `is_deleted`) VALUES ('Опубликован', 'published', '1', '0')");

        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE scenario ADD status_id INT NOT NULL DEFAULT 1 AFTER code');
        $this->addSql('ALTER TABLE scenario ADD CONSTRAINT FK_3E45C8D86BF700BD FOREIGN KEY (status_id) REFERENCES scenario_status (id)');
        $this->addSql('CREATE INDEX IDX_3E45C8D86BF700BD ON scenario (status_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX FK_13A86F71232D562B ON detailed_object_target_status');
        $this->addSql('DROP INDEX FK_13A86F716BF700BD ON detailed_object_target_status');
        $this->addSql('ALTER TABLE scenario DROP FOREIGN KEY FK_3E45C8D86BF700BD');
        $this->addSql('DROP INDEX IDX_3E45C8D86BF700BD ON scenario');
        $this->addSql('ALTER TABLE scenario DROP status_id');
    }
}
