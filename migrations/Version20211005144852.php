<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211005144852 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE label (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, url_image VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom_entreprise VARCHAR(255) NOT NULL, score DOUBLE PRECISION DEFAULT NULL, adresse VARCHAR(255) NOT NULL, numero VARCHAR(255) DEFAULT NULL, siren VARCHAR(255) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur_label (id INT AUTO_INCREMENT NOT NULL, label_id INT NOT NULL, utilisateur_id INT NOT NULL, date_obtention DATE NOT NULL, note DOUBLE PRECISION NOT NULL, INDEX IDX_C862083633B92F39 (label_id), INDEX IDX_C8620836FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateur_label ADD CONSTRAINT FK_C862083633B92F39 FOREIGN KEY (label_id) REFERENCES label (id)');
        $this->addSql('ALTER TABLE utilisateur_label ADD CONSTRAINT FK_C8620836FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur_label DROP FOREIGN KEY FK_C862083633B92F39');
        $this->addSql('ALTER TABLE utilisateur_label DROP FOREIGN KEY FK_C8620836FB88E14F');
        $this->addSql('DROP TABLE label');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE utilisateur_label');
    }
}
