<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325174302 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE boat (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_available TINYINT(1) NOT NULL, geolocation VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, history LONGTEXT NOT NULL, nb_person_max INT NOT NULL, opening_hours VARCHAR(255) NOT NULL, launch_year VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, material VARCHAR(255) NOT NULL, buying_price VARCHAR(255) DEFAULT NULL, restoration VARCHAR(255) DEFAULT NULL, length VARCHAR(255) NOT NULL, max_width VARCHAR(255) NOT NULL, max_draught VARCHAR(255) NOT NULL, propulsion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE boat');
    }
}
