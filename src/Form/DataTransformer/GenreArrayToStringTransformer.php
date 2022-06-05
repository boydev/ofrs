<?php

namespace App\Form\DataTransformer;

use App\Entity\Genre;
use App\Repository\GenreRepository;
use Symfony\Component\Form\DataTransformerInterface;

class GenreArrayToStringTransformer implements DataTransformerInterface
{
    private GenreRepository $genreRepository;

    public function __construct(
        GenreRepository $genreRepository
    ) {
        $this->genreRepository = $genreRepository;
    }

    public function transform($genres): string
    {
        return implode(',', $genres);
    }

    public function reverseTransform($string): array
    {
        if (empty($string)) {
            return [];
        }

        $names = array_filter(array_unique(array_map('trim', explode(',', $string))));

        $genres = $this->genreRepository->findBy([
            'name' => $names,
        ]);
        $newGenres = array_diff($names, $genres);
        foreach ($newGenres as $name) {
            $genre = new Genre();
            $genre->setName($name);
            $genres[] = $genre;
        }

        return $genres;
    }
}
