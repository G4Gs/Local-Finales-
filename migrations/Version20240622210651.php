<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240622210651 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Solo agrega la foreign key si la columna curso_id ya existe y la FK no existe aún.
        // Si ya existe la FK, comenta o elimina la siguiente línea:
        $this->addSql('ALTER TABLE examen_final ADD CONSTRAINT FK_EXAMEN_FINAL_CURSO FOREIGN KEY (curso_id) REFERENCES curso (id)');

        $this->addSql('ALTER TABLE alumno ADD CONSTRAINT FK_1435D52DF5F88DB9 FOREIGN KEY (persona_id) REFERENCES persona (id)');
        $this->addSql('ALTER TABLE asignatura ADD CONSTRAINT FK_9243D6CEE2D74A4D FOREIGN KEY (tecnicatura_id) REFERENCES tecnicatura (id)');
        $this->addSql('ALTER TABLE comision ADD CONSTRAINT FK_1013896F69C5211E FOREIGN KEY (turno_id) REFERENCES turno (id)');
        $this->addSql('ALTER TABLE comision ADD CONSTRAINT FK_1013896FE2D74A4D FOREIGN KEY (tecnicatura_id) REFERENCES tecnicatura (id)');
        $this->addSql('ALTER TABLE correlativa ADD CONSTRAINT FK_501CD9D2C5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id)');
        $this->addSql('ALTER TABLE correlativa ADD CONSTRAINT FK_501CD9D2ACB70627 FOREIGN KEY (correlativa_id) REFERENCES asignatura (id)');
        $this->addSql('ALTER TABLE cursada ADD CONSTRAINT FK_F474F7D3FC28E5EE FOREIGN KEY (alumno_id) REFERENCES alumno (id)');
        $this->addSql('ALTER TABLE cursada ADD CONSTRAINT FK_F474F7D34B352BE1 FOREIGN KEY (comision_id) REFERENCES comision (id)');
        $this->addSql('ALTER TABLE cursada ADD CONSTRAINT FK_F474F7D3C5C70C5B FOREIGN KEY (asignatura_id) REFERENCES asignatura (id)');
        $this->addSql('ALTER TABLE cursada_docente ADD CONSTRAINT FK_8D9BE23B94E27525 FOREIGN KEY (docente_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE cursada_docente ADD CONSTRAINT FK_8D9BE23BE8ADDD3D FOREIGN KEY (revista_id) REFERENCES revista (id)');
        $this->addSql('ALTER TABLE cursada_docente ADD CONSTRAINT FK_8D9BE23BE51B8CF2 FOREIGN KEY (cursada_id) REFERENCES cursada (id)');
        $this->addSql('ALTER TABLE docente ADD CONSTRAINT FK_FD9FCFA4F5F88DB9 FOREIGN KEY (persona_id) REFERENCES persona (id)');
        $this->addSql('ALTER TABLE habilitante ADD CONSTRAINT FK_DA63DA0861AD3496 FOREIGN KEY (titulo_id) REFERENCES titulo (id)');
        $this->addSql('ALTER TABLE habilitante ADD CONSTRAINT FK_DA63DA0894E27525 FOREIGN KEY (docente_id) REFERENCES docente (id)');
        $this->addSql('ALTER TABLE instituto ADD CONSTRAINT FK_2A805CCE67707C89 FOREIGN KEY (localidad_id) REFERENCES localidad (id)');
        $this->addSql('ALTER TABLE localidad ADD CONSTRAINT FK_4F68E0104E7121AF FOREIGN KEY (provincia_id) REFERENCES provincia (id)');
        $this->addSql('ALTER TABLE localidad ADD CONSTRAINT FK_4F68E01098260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE persona ADD CONSTRAINT FK_51E5B69BC604D5C6 FOREIGN KEY (pais_id) REFERENCES pais (id)');
        $this->addSql('ALTER TABLE persona ADD CONSTRAINT FK_51E5B69B67707C89 FOREIGN KEY (localidad_id) REFERENCES localidad (id)');
        $this->addSql('ALTER TABLE provincia ADD CONSTRAINT FK_D39AF213C604D5C6 FOREIGN KEY (pais_id) REFERENCES pais (id)');
        $this->addSql('ALTER TABLE tecnicatura ADD CONSTRAINT FK_17FAADB41E092B9F FOREIGN KEY (modalidad_id) REFERENCES modalidad (id)');
        $this->addSql('ALTER TABLE telefono ADD CONSTRAINT FK_C1E70A7F6C6EF28 FOREIGN KEY (instituto_id) REFERENCES instituto (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE alumno DROP FOREIGN KEY FK_1435D52DF5F88DB9');
        $this->addSql('ALTER TABLE asignatura DROP FOREIGN KEY FK_9243D6CEE2D74A4D');
        $this->addSql('ALTER TABLE comision DROP FOREIGN KEY FK_1013896F69C5211E');
        $this->addSql('ALTER TABLE comision DROP FOREIGN KEY FK_1013896FE2D74A4D');
        $this->addSql('ALTER TABLE correlativa DROP FOREIGN KEY FK_501CD9D2C5C70C5B');
        $this->addSql('ALTER TABLE correlativa DROP FOREIGN KEY FK_501CD9D2ACB70627');
        $this->addSql('ALTER TABLE cursada DROP FOREIGN KEY FK_F474F7D3FC28E5EE');
        $this->addSql('ALTER TABLE cursada DROP FOREIGN KEY FK_F474F7D34B352BE1');
        $this->addSql('ALTER TABLE cursada DROP FOREIGN KEY FK_F474F7D3C5C70C5B');
        $this->addSql('ALTER TABLE cursada_docente DROP FOREIGN KEY FK_8D9BE23B94E27525');
        $this->addSql('ALTER TABLE cursada_docente DROP FOREIGN KEY FK_8D9BE23BE8ADDD3D');
        $this->addSql('ALTER TABLE cursada_docente DROP FOREIGN KEY FK_8D9BE23BE51B8CF2');
        $this->addSql('ALTER TABLE docente DROP FOREIGN KEY FK_FD9FCFA4F5F88DB9');
        $this->addSql('ALTER TABLE habilitante DROP FOREIGN KEY FK_DA63DA0861AD3496');
        $this->addSql('ALTER TABLE habilitante DROP FOREIGN KEY FK_DA63DA0894E27525');
        $this->addSql('ALTER TABLE instituto DROP FOREIGN KEY FK_2A805CCE67707C89');
        $this->addSql('ALTER TABLE localidad DROP FOREIGN KEY FK_4F68E0104E7121AF');
        $this->addSql('ALTER TABLE localidad DROP FOREIGN KEY FK_4F68E01098260155');
        $this->addSql('ALTER TABLE persona DROP FOREIGN KEY FK_51E5B69BC604D5C6');
        $this->addSql('ALTER TABLE persona DROP FOREIGN KEY FK_51E5B69B67707C89');
        $this->addSql('ALTER TABLE provincia DROP FOREIGN KEY FK_D39AF213C604D5C6');
        $this->addSql('ALTER TABLE tecnicatura DROP FOREIGN KEY FK_17FAADB41E092B9F');
        $this->addSql('ALTER TABLE telefono DROP FOREIGN KEY FK_C1E70A7F6C6EF28');
        $this->addSql('DROP TABLE alumno');
        $this->addSql('DROP TABLE asignatura');
        $this->addSql('DROP TABLE comision');
        $this->addSql('DROP TABLE correlativa');
        $this->addSql('DROP TABLE cursada');
        $this->addSql('DROP TABLE cursada_docente');
        $this->addSql('DROP TABLE docente');
        $this->addSql('DROP TABLE habilitante');
        $this->addSql('DROP TABLE instituto');
        $this->addSql('DROP TABLE localidad');
        $this->addSql('DROP TABLE modalidad');
        $this->addSql('DROP TABLE pais');
        $this->addSql('DROP TABLE persona');
        $this->addSql('DROP TABLE provincia');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE revista');
        $this->addSql('DROP TABLE tecnicatura');
        $this->addSql('DROP TABLE telefono');
        $this->addSql('DROP TABLE titulo');
        $this->addSql('DROP TABLE turno');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}