<?php
/**
 * Created by PhpStorm.
 * User: wangxiguang
 * Date: 11/6/18
 * Time: 2:10 PM
 */

namespace DesignPatterns\Structural\Composite;


class HtmlRender implements Renderable
{
    protected $elements;

    public function render()
    {
        $html = '';
        foreach ($this->elements as $element) {
            $html .= $element->render();
        }
        return $html;
    }

    public function addElement($elementName, Element $element)
    {
        $this->elements[$elementName] = $element;
        return true;
    }

    public function removeElement(string $elementName)
    {
        if (key_exists($elementName, $this->elements)) {
            unset($this->elements[$elementName]);
            return true;
        } else {
            throw new \UnexpectedValueException('element not exists');
        }
    }

}