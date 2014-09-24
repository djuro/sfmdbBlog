<?php

namespace Acme\BlogBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends DocumentRepository
{

	/**
	* Returns all posts having the specified tag.
	*
	* @param string $tagName
	* @return Doctrine\ODM\MongoDB\Cursor
	*/
	public function findAllHavingTag($tagName)
    {
        return $this->createQueryBuilder()
            ->field('tags.name')->equals($tagName)
            ->getQuery()
            ->execute();
    }
}