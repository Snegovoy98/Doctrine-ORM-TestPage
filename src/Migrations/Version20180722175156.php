<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180722175156 extends AbstractMigration
{
    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     */
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql(

            'CREATE TABLE album (id INT AUTO_INCREMENT NOT NULL COMMENT Primary Key: Unique cache  ID., index VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, about_content LONGTEXT NOT NULL, additional_info VARCHAR(255) NOT NULL, show_additional_info TINYINT(1) NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql(

            "INSERT INTO album (id,
                                    index,
                                    title, 
                            about_content, 
                          additional_info, 
                      show_additional_info, 
                                updated_at) 
                          VALUES( 1,
                                  'album',
                                  'Album',
                                'Something short and leading about the collection below—its contents, 
                                 the creator, etc. 
                                 Make it short and sweet, 
                                 but not too short so folks don't simply skip over it entirely.', 
                                'This is a wider card with supporting text below as a 
                                natural lead-in to additional content. 
                                This content is a little bit longer.',
                                true,
                                22.07.2018)
                                         ");
    }

    /**
     * @param Schema $schema
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\DBAL\Migrations\AbortMigrationException
     */
    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql(
            'DROP TABLE page_name');
    }
}
