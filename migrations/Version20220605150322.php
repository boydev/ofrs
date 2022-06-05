<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20220605150322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add song genre';
    }

    public function up(Schema $schema): void
    {
        $sql = <<<sql
CREATE TABLE genre (
    id INT AUTO_INCREMENT NOT NULL, 
    name VARCHAR(64) NOT NULL, 
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
sql;
        $this->addSql($sql);
        $sql = <<<sql
CREATE TABLE song_genre (
    song_id INT NOT NULL, 
    genre_id INT NOT NULL, 
    INDEX IDX_4EF4A6BDA0BDB2F3 (song_id), 
    INDEX IDX_4EF4A6BD4296D31F (genre_id), 
    PRIMARY KEY(song_id, genre_id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
sql;
        $this->addSql($sql);
        $this->addSql('ALTER TABLE song_genre ADD CONSTRAINT FK_4EF4A6BDA0BDB2F3 FOREIGN KEY (song_id) REFERENCES song (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE song_genre ADD CONSTRAINT FK_4EF4A6BD4296D31F FOREIGN KEY (genre_id) REFERENCES genre (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE song_genre DROP FOREIGN KEY FK_4EF4A6BD4296D31F');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP TABLE song_genre');
    }
}
