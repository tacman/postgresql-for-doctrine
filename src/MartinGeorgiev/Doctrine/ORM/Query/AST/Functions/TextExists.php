<?php

declare(strict_types=1);

namespace MartinGeorgiev\Doctrine\ORM\Query\AST\Functions;

/**
 * Implementation of PostgreSql check if a text string exists (using ?).
 *
 * @see https://www.postgresql.org/docs/9.5/functions-json.html
 *
 * @author Martin Georgiev <martin.georgiev@gmail.com>
 * @author Tac Tacelosky <tacman@gmail.com>
 */
class TextExists extends BaseFunction
{
    protected function customiseFunction(): void
    {
        $this->setFunctionPrototype('(%s ? %s)');
        $this->addNodeMapping('StringPrimary');
        $this->addNodeMapping('StringPrimary');
    }
}
