<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190405171557 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE pista (id INT AUTO_INCREMENT NOT NULL, id_deporte_id INT NOT NULL, id_instalacion_id INT NOT NULL, nombre_pista VARCHAR(255) NOT NULL, precio_hora DOUBLE PRECISION NOT NULL, disponible INT NOT NULL, comentarios VARCHAR(255) DEFAULT NULL, INDEX IDX_5E8F946E8616D40A (id_deporte_id), INDEX IDX_5E8F946E7361D98C (id_instalacion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pista ADD CONSTRAINT FK_5E8F946E8616D40A FOREIGN KEY (id_deporte_id) REFERENCES deporte (id)');
        $this->addSql('ALTER TABLE pista ADD CONSTRAINT FK_5E8F946E7361D98C FOREIGN KEY (id_instalacion_id) REFERENCES instalacion (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE pista');
    }
}
