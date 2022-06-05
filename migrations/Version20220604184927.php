<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20220604184927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add artist and song tables';
    }

    public function up(Schema $schema): void
    {
        $sql = <<<sql
CREATE TABLE artist (
    id INT AUTO_INCREMENT NOT NULL, 
    name VARCHAR(255) NOT NULL, 
    is_band TINYINT(1) NOT NULL, 
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
sql;
        $this->addSql($sql);
        $sql = <<<sql
CREATE TABLE song (
    id INT AUTO_INCREMENT NOT NULL, 
    title VARCHAR(255) NOT NULL, 
    lyrics LONGTEXT NOT NULL, 
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
sql;
        $this->addSql($sql);
        $sql = <<<sql
CREATE TABLE song_artist (
    song_id INT NOT NULL, 
    artist_id INT NOT NULL, 
    INDEX IDX_722870DA0BDB2F3 (song_id), 
    INDEX IDX_722870DB7970CF8 (artist_id), 
    PRIMARY KEY(song_id, artist_id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
sql;
        $this->addSql($sql);
        $this->addSql('ALTER TABLE song_artist ADD CONSTRAINT FK_722870DA0BDB2F3 FOREIGN KEY (song_id) REFERENCES song (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE song_artist ADD CONSTRAINT FK_722870DB7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE song_artist DROP FOREIGN KEY FK_722870DB7970CF8');
        $this->addSql('ALTER TABLE song_artist DROP FOREIGN KEY FK_722870DA0BDB2F3');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE song');
        $this->addSql('DROP TABLE song_artist');
    }
}
