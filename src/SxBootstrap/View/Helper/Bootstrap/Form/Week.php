<?php

namespace SxBootstrap\View\Helper\Bootstrap\Form;

class Week extends Input
{
    /**
     * Renders Week input type
     *
     * @param \Zend\Form\ElementInterface|string|null $elementType
     *
     * @return \SxBootstrap\View\Helper\Bootstrap\Form\Week
     */
    public function __invoke($elementType = null)
    {
        return parent::__invoke($elementType)->type('week');
    }

    /**
     * @param integer|string $min Valid week string
     *
     * @return \SxBootstrap\View\Helper\Bootstrap\Form\Week
     */
    public function min($min)
    {
        $this->addAttribute('min', (string) $min);

        return $this;
    }

    /**
     * @param integer|string $max Valid week string
     *
     * @return \SxBootstrap\View\Helper\Bootstrap\Form\Week
     */
    public function max($max)
    {
        $this->addAttribute('max', (string) $max);

        return $this;
    }

    /**
     * @param integer|string $step in weeks (default 1)
     *
     * @return \SxBootstrap\View\Helper\Bootstrap\Form\Week
     */
    public function step($step = 1)
    {
        $this->addAttribute('step', (string) $step);

        return $this;
    }
}
