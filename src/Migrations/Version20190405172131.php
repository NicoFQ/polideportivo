<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190405172131 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE clase_usuario (clase_id INT NOT NULL, usuario_id INT NOT NULL, INDEX IDX_38CAEC5A9F720353 (clase_id), INDEX IDX_38CAEC5ADB38439E (usuario_id), PRIMARY KEY(clase_id, usuario_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE clase_usuario ADD CONSTRAINT FK_38CAEC5A9F720353 FOREIGN KEY (clase_id) REFERENCES clase (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE clase_usuario ADD CONSTRAINT FK_38CAEC5ADB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE clase_usuario');
    }
}
