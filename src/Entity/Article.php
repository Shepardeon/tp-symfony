<?php

namespace App\Entity;

class Article {
    private string $title;
    private string $subtitle;
    private \DateTime $createdAt;
    private string $author;
    private string $body;
    private string $image;

    function SetTitle(string $title) : void {
        $this->title = $title;
    }

    function GetTitle() : string {
        return $this->title;
    }

    function SetSubtitle(string $subtitle) : void {
        $this->subtitle = $subtitle;
    }

    function GetSubtitle() : string {
        return $this->subtitle;
    }

    function SetCreatedAt(\DateTime $createdAt) : void {
        $this->createdAt = $createdAt;
    }

    function GetCreatedAt() : \DateTime {
        return $this->createdAt;
    }

    function SetAuthor(string $author) : void {
        $this->author = $author;
    }

    function GetAuthor() : string {
        return $this->author;
    }

    function SetBody(string $body) : void {
        $this->body = $body;
    }

    function GetBody() : string {
        return $this->body;
    }

    function SetImage(string $image) : void {
        $this->image = $image;
    }

    function GetImage() : string {
        return $this->image;
    }
}