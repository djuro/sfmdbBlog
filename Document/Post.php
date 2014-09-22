<?php

namespace Acme\BlogBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Post
{
	/**
     * @MongoDB\Id
     */
	private $id;

	/**
     * @MongoDB\String
     */
	private $title;

	/**
     * @MongoDB\String
     */
	private $body;

	/**
	 * @MongoDB\EmbedMany(targetDocument="Tag")
	 */
	private $tags = array();

	/**
	 * SEO friendly part of url, unique title
     * @MongoDB\String
     * @MongoDB\Index(unique=true, order="asc")
     */
	private $slug;
	
	/**
	* @param string $title
	*/
	public function setTitle($title)
	{
		$this->title = $title;
	}

	/**
	* @param string $body
	*/
	public function setBody($body)
	{
		$this->body = $body;
	}

	/**
	* @param Tag[]
	*/
	public function setTags($tags)
	{
		$this->tags = $tags;
	}

    public function getId()
	{
		return $this->id;
	}
	/**
	* @return string
	*/
	public function getTitle()
	{
		return $this->title;
	}

	/**
	* @return string
	*/
	public function getBody()
	{
		return $this->body;
	}

	/**
	* @return Tag[]
	*/
	public function getTags()
	{
		return $this->tags;
	}

	/**
	* @return string
	*/
	public function getSlug()
	{
		return $this->slug;
	}

	/**
	* @param string $slug
	*/
	public function setSlug($slug)
	{
		$this->slug = $slug;
	}

}