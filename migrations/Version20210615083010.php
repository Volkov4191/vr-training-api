<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210615083010 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE scenario_status (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, code VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP INDEX IDX_13A86F71232D562B ON detailed_object_target_status');
        $this->addSql('DROP INDEX IDX_13A86F716BF700BD ON detailed_object_target_status');
        $this->addSql('CREATE INDEX IDX_13A86F71232D562B ON detailed_object_target_status (object_id)');
        $this->addSql('CREATE INDEX IDX_13A86F716BF700BD ON detailed_object_target_status (status_id)');
        $this->addSql('ALTER TABLE step CHANGE type_id type_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE scenario_status');
        $this->addSql('DROP INDEX IDX_13A86F71232D562B ON detailed_object_target_status');
        $this->addSql('DROP INDEX IDX_13A86F716BF700BD ON detailed_object_target_status');
        $this->addSql('CREATE INDEX IDX_13A86F71232D562B ON detailed_object_target_status (object_id(191))');
        $this->addSql('CREATE INDEX IDX_13A86F716BF700BD ON detailed_object_target_status (status_id(191))');
        $this->addSql('ALTER TABLE step CHANGE type_id type_id INT DEFAULT 1 NOT NULL');
    }
}
