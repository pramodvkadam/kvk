<?php

namespace PhpParser\Builder;

use PhpParser;

abstract class Declaration extends PhpParser\BuilderAbstract
{
    protected $attributes = array();

    /**
     * Adds multiple statements.
     *
     * @param array $stmts The statements to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmts(array $stmts) {
        foreach ($stmts as $stmt) {
            $this->addStmt($stmt);
        }

        return $this;
    }

    abstract public function addStmt($stmt);

    /**
     * Sets doc comment for the declaration.
     *
     * @param PhpParser\Comment\Doc|string $docComment Doc comment to set
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setDocComment($docComment) {
        $this->attributes['comments'] = array(
            $this->normalizeDocComment($docComment)
        );

        return $this;
    }
}