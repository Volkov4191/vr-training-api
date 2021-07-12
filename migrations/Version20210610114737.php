<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210610114737 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes

        //$this->addSql('ALTER TABLE DetailedObjectData CHANGE ID ID VARCHAR(255) NOT NULL, CHANGE IsInactive IsInactive TINYINT(1) NOT NULL');
        //$this->addSql('ALTER TABLE MnemonicMapData CHANGE ID ID VARCHAR(255) NOT NULL, CHANGE ShowModificatorValue ShowModificatorValue TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE scenario ADD CONSTRAINT FK_3E45C8D819EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        //$this->addSql('ALTER TABLE StatusData CHANGE ID ID VARCHAR(255) NOT NULL, CHANGE SortIndex SortIndex INT NOT NULL');

        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `DetailedObjectData` ADD UNIQUE INDEX `ID_UNIQUE` (`ID` ASC);');
        $this->addSql('ALTER TABLE `StatusData` ADD UNIQUE INDEX `ID_UNIQUE` (`ID` ASC);');

        $this->addSql("ALTER TABLE `DetailedObjectData` CHANGE COLUMN `ID` `ID` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL");
        $this->addSql("ALTER TABLE `StatusData` CHANGE COLUMN `ID` `ID` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL");

        $this->addSql('CREATE TABLE detailed_object_target_status (id INT AUTO_INCREMENT NOT NULL, step_id INT NOT NULL, object_id VARCHAR(255) NOT NULL, status_id VARCHAR(255) NOT NULL, is_active TINYINT(1) NOT NULL, is_deleted TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_13A86F7173B21E9C (step_id), INDEX IDX_13A86F71232D562B (object_id), INDEX IDX_13A86F716BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql("ALTER TABLE `detailed_object_target_status` CHANGE COLUMN `object_id` `object_id` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL ,CHANGE COLUMN `status_id` `status_id` VARCHAR(255) CHARACTER SET 'utf8' NOT NULL");
        $this->addSql('ALTER TABLE detailed_object_target_status ADD CONSTRAINT FK_13A86F7173B21E9C FOREIGN KEY (step_id) REFERENCES step (id)');
        $this->addSql('ALTER TABLE detailed_object_target_status ADD CONSTRAINT FK_13A86F71232D562B FOREIGN KEY (object_id) REFERENCES DetailedObjectData (id)');
        $this->addSql('ALTER TABLE detailed_object_target_status ADD CONSTRAINT FK_13A86F716BF700BD FOREIGN KEY (status_id) REFERENCES StatusData (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE detailed_object_target_status');
        $this->addSql('ALTER TABLE `DetailedObjectData` DROP INDEX `ID_UNIQUE` ;');
        $this->addSql('ALTER TABLE `StatusData` DROP INDEX `ID_UNIQUE` ;');
        $this->addSql('ALTER TABLE scenario DROP FOREIGN KEY FK_3E45C8D819EB6921');
        //$this->addSql('ALTER TABLE StatusData CHANGE ID ID VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE SortIndex SortIndex INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE step CHANGE type_id type_id INT DEFAULT 1 NOT NULL');
        //$this->addSql('ALTER TABLE DetailedObjectData CHANGE ID ID VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE IsInactive IsInactive TINYINT(1) DEFAULT \'0\' NOT NULL');
        //$this->addSql('ALTER TABLE MnemonicMapData CHANGE ID ID VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE ShowModificatorValue ShowModificatorValue TINYINT(1) DEFAULT \'0\' NOT NULL');

    }
}
