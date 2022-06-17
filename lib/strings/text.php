<?php
declare(strict_types=1);

namespace kudni\text;

interface Text
{
   public function value(): string;

   public function length(): int;

}