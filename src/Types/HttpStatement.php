<?php

namespace Darkterminal\LibSQL\Types;

/**
 * Represents an HTTP statement with SQL and optional arguments.
 */
class HttpStatement
{
    /**
     * @var string The SQL statement.
     */
    public string $sql;

    /**
     * @var array|null The optional arguments for the SQL statement.
     */
    public ?array $args;

    /**
     * @var bool The optional arguments for the SQL statement.
     */
    public ?bool $named_args;

    /**
     * Constructs a new HttpStatement instance.
     *
     * @param string $sql The SQL statement.
     * @param array|null $args The optional arguments for the SQL statement.
     */
    public function __construct(
        string $sql,
        ?array $args = [],
        ?bool $named_args = false
    ) {
        $this->sql = $sql;
        $this->args = $args;
        $this->named_args = $named_args;
    }

    /**
     * Creates a new HttpStatement instance.
     *
     * @param string $sql The SQL statement.
     * @param array|null $args The optional arguments for the SQL statement.
     * @return self The created HttpStatement instance.
     */
    public static function create(
        string $sql,
        ?array $args = [],
        ?bool $named_args = false
    ): self {
        return new self($sql, $args, $named_args);
    }

    /**
     * Converts the HttpStatement instance to an array.
     *
     * @return array The array representation of the HttpStatement instance.
     */
    public function toArray(): array
    {
        return [
            'sql' => $this->sql,
            'args' => $this->args,
            'named_args' => $this->named_args
        ];
    }

    /**
     * Converts the HttpStatement instance to a JSON string.
     *
     * @return string The JSON representation of the HttpStatement instance.
     */
    public function toObject(): string
    {
        return \json_encode($this->toArray());
    }
}
