<?php namespace October\Rain\Parse;

use Event;
use October\Rain\Parse\Parsedown\Parsedown;

/**
 * Markdown helper class.
 *
 * Calling Markdown::parse($text) returns the HTML corresponding
 * to the Markdown input in $text.
 *
 * OctoberCMS uses ParsedownExtra as its Markdown parser,
 * but fires markdown.beforeParse and markdown.parse events
 * allowing hooks into the default parsing,
 *
 * The markdown.beforeParse event passes a MarkdownData
 * instance, containing a public $text variable. Event
 * listeners can modify $text, for example to filter out
 * or protect snippets from being interpreted by ParseDown.
 *
 * Similarly, markdown.parse is fired after ParseDown has
 * interpreted the (possibly modified) input. This event
 * passes an array [$text, $data], where $text is the
 * original unmodified Markdown input, and $data is the HTML
 * code generated by ParseDown.
 *
 * @package october\parse
 * @author Alexey Bobkov, Samuel Georges
 **/
class Markdown
{
    use \October\Rain\Support\Traits\Emitter;

    /**
     * @var October\Rain\Parse\Parsedown\Parsedown Parsedown instance
     */
    protected $parser;

    /**
     * Disables code blocks caused by indentation.
     * @param  string $text Markdown text to parse
     * @return string       Resulting HTML
     */
    public function parseSafe($text)
    {
        $this->getParser()->setUnmarkedBlockTypes([]);

        $result = $this->parse($text);

        $this->parser = null;

        return $result;
    }

    protected function getParser()
    {
        if ($this->parser === null) {
            $this->parser = new Parsedown;
        }

        return $this->parser;
    }

    /**
     * Parse text using Markdown and Markdown-Extra
     * @param  string $text Markdown text to parse
     * @return string       Resulting HTML
     */
    public function parse($text)
    {
        return $this->parseInternal($text);
    }

    /**
     * Internal method for parsing
     */
    protected function parseInternal($text, $method = 'text')
    {
        $data = new MarkdownData($text);

        $this->fireEvent('beforeParse', $data, false);
        Event::fire('markdown.beforeParse', $data, false);

        $result = $data->text;

        $result = $this->getParser()->$method($result);

        $data->text = $result;

        // The markdown.parse gets passed both the original
        // input and the result so far.
        $this->fireEvent('parse', [$text, $data], false);
        Event::fire('markdown.parse', [$text, $data], false);

        return $data->text;
    }

    /**
     * Parse a single line
     * @param  string $text Markdown text to parse
     * @return string       Resulting HTML
     */
    public function parseLine($text)
    {
        return $this->parseInternal($text, 'line');
    }
}
