<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190405170553 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE clase_usuario DROP FOREIGN KEY FK_38CAEC5A9F720353');
        $this->addSql('ALTER TABLE pista DROP FOREIGN KEY FK_5E8F946E8616D40A');
        $this->addSql('ALTER TABLE pista DROP FOREIGN KEY FK_5E8F946E7361D98C');
        $this->addSql('ALTER TABLE reserva DROP FOREIGN KEY FK_188D2E3B7EB2C349');
        $this->addSql('ALTER TABLE pago DROP FOREIGN KEY FK_F4DF5F3E53C3D752');
        $this->addSql('DROP TABLE clase');
        $this->addSql('DROP TABLE clase_usuario');
        $this->addSql('DROP TABLE deporte');
        $this->addSql('DROP TABLE gustos_usuario');
        $this->addSql('DROP TABLE instalacion');
        $this->addSql('DROP TABLE noticia');
        $this->addSql('DROP TABLE pago');
        $this->addSql('DROP TABLE pista');
        $this->addSql('DROP TABLE reserva');
        $this->addSql('DROP TABLE tipo_pago');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05D4ABE41B6');
        $this->addSql('DROP INDEX IDX_2265B05D4ABE41B6 ON usuario');
        $this->addSql('ALTER TABLE usuario ADD usuario_activo INT NOT NULL, DROP numero_telf, CHANGE num_documento num_documento VARCHAR(255) NOT NULL, CHANGE sexo sexo INT DEFAULT NULL, CHANGE fecha_alta fecha_alta DATE NOT NULL, CHANGE tipo_usuario_id id_tipo_usuario_id INT NOT NULL');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05DA3E0823E FOREIGN KEY (id_tipo_usuario_id) REFERENCES tipo_usuario (id)');
        $this->addSql('CREATE INDEX IDX_2265B05DA3E0823E ON usuario (id_tipo_usuario_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE clase (id INT AUTO_INCREMENT NOT NULL, nombre_clase VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, precio_clase DOUBLE PRECISION NOT NULL, mes_clase DATE NOT NULL, dias_semana VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, hora_inicio DATETIME NOT NULL, hora_fin DATETIME NOT NULL, max_alumnos INT NOT NULL, min_alumnos INT NOT NULL, disponible INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE clase_usuario (clase_id INT NOT NULL, usuario_id INT NOT NULL, INDEX IDX_38CAEC5ADB38439E (usuario_id), INDEX IDX_38CAEC5A9F720353 (clase_id), PRIMARY KEY(clase_id, usuario_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE deporte (id INT AUTO_INCREMENT NOT NULL, nombre_deporte VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE gustos_usuario (id INT AUTO_INCREMENT NOT NULL, usuario_id INT DEFAULT NULL, deportes_favoritos VARCHAR(1000) DEFAULT NULL COLLATE utf8mb4_unicode_ci, comentarios VARCHAR(1000) DEFAULT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_5892CF68DB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE instalacion (id INT AUTO_INCREMENT NOT NULL, nombre_instalacion VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE noticia (id INT AUTO_INCREMENT NOT NULL, titulo VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, contenido VARCHAR(5000) NOT NULL COLLATE utf8mb4_unicode_ci, img_noticia VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pago (id INT AUTO_INCREMENT NOT NULL, id_tipo_pago_id INT NOT NULL, id_articulo VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, token_pago VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, concepto VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, fecha_pago DATE NOT NULL, INDEX IDX_F4DF5F3E53C3D752 (id_tipo_pago_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE pista (id INT AUTO_INCREMENT NOT NULL, id_deporte_id INT NOT NULL, id_instalacion_id INT NOT NULL, nombre_pista VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, precio_hora DOUBLE PRECISION NOT NULL, estado INT NOT NULL, comentarios VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, INDEX IDX_5E8F946E8616D40A (id_deporte_id), INDEX IDX_5E8F946E7361D98C (id_instalacion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reserva (id INT AUTO_INCREMENT NOT NULL, id_usuario_id INT NOT NULL, id_pista_id INT NOT NULL, precio_reserva DOUBLE PRECISION NOT NULL, fecha_reserva DATE NOT NULL, hora_inicio DATETIME NOT NULL, hora_fin DATETIME NOT NULL, fecha_creacion DATE NOT NULL, INDEX IDX_188D2E3B7EB2C349 (id_usuario_id), INDEX IDX_188D2E3B1CF91E7E (id_pista_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tipo_pago (id INT AUTO_INCREMENT NOT NULL, nombre_tipo VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE clase_usuario ADD CONSTRAINT FK_38CAEC5A9F720353 FOREIGN KEY (clase_id) REFERENCES clase (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE clase_usuario ADD CONSTRAINT FK_38CAEC5ADB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gustos_usuario ADD CONSTRAINT FK_5892CF68DB38439E FOREIGN KEY (usuario_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE pago ADD CONSTRAINT FK_F4DF5F3E53C3D752 FOREIGN KEY (id_tipo_pago_id) REFERENCES tipo_pago (id)');
        $this->addSql('ALTER TABLE pista ADD CONSTRAINT FK_5E8F946E7361D98C FOREIGN KEY (id_instalacion_id) REFERENCES instalacion (id)');
        $this->addSql('ALTER TABLE pista ADD CONSTRAINT FK_5E8F946E8616D40A FOREIGN KEY (id_deporte_id) REFERENCES deporte (id)');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3B1CF91E7E FOREIGN KEY (id_pista_id) REFERENCES usuario (id)');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3B7EB2C349 FOREIGN KEY (id_usuario_id) REFERENCES pista (id)');
        $this->addSql('ALTER TABLE usuario DROP FOREIGN KEY FK_2265B05DA3E0823E');
        $this->addSql('DROP INDEX IDX_2265B05DA3E0823E ON usuario');
        $this->addSql('ALTER TABLE usuario ADD tipo_usuario_id INT NOT NULL, ADD numero_telf VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, DROP id_tipo_usuario_id, DROP usuario_activo, CHANGE num_documento num_documento VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE sexo sexo INT NOT NULL, CHANGE fecha_alta fecha_alta DATETIME NOT NULL');
        $this->addSql('ALTER TABLE usuario ADD CONSTRAINT FK_2265B05D4ABE41B6 FOREIGN KEY (tipo_usuario_id) REFERENCES tipo_usuario (id)');
        $this->addSql('CREATE INDEX IDX_2265B05D4ABE41B6 ON usuario (tipo_usuario_id)');
    }
}
