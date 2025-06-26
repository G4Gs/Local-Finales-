<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250617012414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Elimina o comenta la siguiente línea si la columna curso_id ya existe en examen_final
        // $this->addSql('ALTER TABLE examen_final ADD curso_id INT DEFAULT NULL');

        // Si necesitas la foreign key y no existe, puedes agregarla así:
        // $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_EXAMEN_FINAL_CURSO FOREIGN KEY (curso_id) REFERENCES curso (id)');

        $this->addSql('ALTER TABLE alumno CHANGE titulo_sec titulo_sec VARCHAR(100) DEFAULT NULL, CHANGE escuela_sec escuela_sec VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE asignatura CHANGE programa programa VARCHAR(20) DEFAULT NULL, CHANGE duracion duracion VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE asistencia CHANGE observacion observacion VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE calendario_clase CHANGE observacion observacion VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE carreras CHANGE inicio inicio DATE DEFAULT NULL, CHANGE fin fin DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE cursada_docente CHANGE cese cese DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE examen_final DROP INDEX UNIQ_8861EFE2CFA8626B, ADD INDEX IDX_8861EFE2CFA8626B (vocal1_id_id)');
        $this->addSql('ALTER TABLE examen_final DROP INDEX UNIQ_8861EFE2FE4078F6, ADD INDEX IDX_8861EFE2FE4078F6 (vocal2_id_id)');
        $this->addSql('ALTER TABLE examen_final DROP INDEX UNIQ_8861EFE2D1F46B1E, ADD INDEX IDX_8861EFE2D1F46B1E (presidente_id_id)');
        $this->addSql('ALTER TABLE instituto CHANGE url_instituto url_instituto VARCHAR(100) DEFAULT NULL, CHANGE instituto instituto VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE localidad CHANGE codigo_postal codigo_postal VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE nota CHANGE parcial parcial VARCHAR(10) DEFAULT NULL, CHANGE recuperatorio1 recuperatorio1 VARCHAR(10) DEFAULT NULL, CHANGE parcial2 parcial2 VARCHAR(10) DEFAULT NULL, CHANGE recuperatorio2 recuperatorio2 VARCHAR(10) DEFAULT NULL');
        $this->addSql('ALTER TABLE persona CHANGE telefono telefono VARCHAR(25) DEFAULT NULL, CHANGE numero numero VARCHAR(10) DEFAULT NULL, CHANGE departamento departamento VARCHAR(2) DEFAULT NULL, CHANGE pasillo pasillo VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE alumno CHANGE titulo_sec titulo_sec VARCHAR(100) DEFAULT \'NULL\', CHANGE escuela_sec escuela_sec VARCHAR(100) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE asignatura CHANGE programa programa VARCHAR(20) DEFAULT \'NULL\', CHANGE duracion duracion VARCHAR(25) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE asistencia CHANGE observacion observacion VARCHAR(100) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE calendario_clase CHANGE observacion observacion VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE carreras CHANGE inicio inicio DATE DEFAULT \'NULL\', CHANGE fin fin DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE cursada_docente CHANGE cese cese DATE DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE examen_final DROP INDEX IDX_8861EFE2D1F46B1E, ADD UNIQUE INDEX UNIQ_8861EFE2D1F46B1E (presidente_id_id)');
        $this->addSql('ALTER TABLE examen_final DROP INDEX IDX_8861EFE2CFA8626B, ADD UNIQUE INDEX UNIQ_8861EFE2CFA8626B (vocal1_id_id)');
        $this->addSql('ALTER TABLE examen_final DROP INDEX IDX_8861EFE2FE4078F6, ADD UNIQUE INDEX UNIQ_8861EFE2FE4078F6 (vocal2_id_id)');
        $this->addSql('ALTER TABLE instituto CHANGE url_instituto url_instituto VARCHAR(100) DEFAULT \'NULL\', CHANGE instituto instituto VARCHAR(50) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE localidad CHANGE codigo_postal codigo_postal VARCHAR(10) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE nota CHANGE parcial parcial VARCHAR(10) DEFAULT \'NULL\', CHANGE recuperatorio1 recuperatorio1 VARCHAR(10) DEFAULT \'NULL\', CHANGE parcial2 parcial2 VARCHAR(10) DEFAULT \'NULL\', CHANGE recuperatorio2 recuperatorio2 VARCHAR(10) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE persona CHANGE telefono telefono VARCHAR(25) DEFAULT \'NULL\', CHANGE numero numero VARCHAR(10) DEFAULT \'NULL\', CHANGE departamento departamento VARCHAR(2) DEFAULT \'NULL\', CHANGE pasillo pasillo VARCHAR(50) DEFAULT \'NULL\'');
    }
}