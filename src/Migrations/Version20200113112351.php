<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200113112351 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ADMIN CHANGE ID_CONTROLER ID_CONTROLER INT DEFAULT NULL');
        $this->addSql('ALTER TABLE UTILISATEUR DROP PORTABLE, DROP NBLICENCE, DROP VERROUNBLICENCE, DROP SOCIETE, DROP ROLE, CHANGE ID_DIRIGER ID_DIRIGER INT DEFAULT NULL, CHANGE ID_APPARTENIR ID_APPARTENIR INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE ADMIN CHANGE ID_CONTROLER ID_CONTROLER INT DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE UTILISATEUR ADD PORTABLE CHAR(10) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD NBLICENCE VARCHAR(128) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD VERROUNBLICENCE TINYINT(1) NOT NULL, ADD SOCIETE VARCHAR(128) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, ADD ROLE INT DEFAULT 2 NOT NULL, CHANGE ID_DIRIGER ID_DIRIGER INT DEFAULT 1 NOT NULL, CHANGE ID_APPARTENIR ID_APPARTENIR INT NOT NULL');
    }
}
