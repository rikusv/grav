<?php

/* modular/text.html.twig */
class __TwigTemplate_a98736d4a2316fd2f662c941fb3bd76a50b8818dedcf8e550ab7367c6bfae65c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modular-row callout\">

    ";
        // line 3
        $context["icon"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "icon", array());
        // line 4
        echo "    ";
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 5
        echo "
    ";
        // line 6
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 7
            echo "        ";
            echo $this->getAttribute($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "cropResize", array(0 => 400, 1 => 400), "method"), "html", array(0 => "", 1 => "", 2 => ("align-" . $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image_align", array()))), "method");
            echo "
    ";
        } else {
            // line 9
            echo "    ";
            if ((isset($context["icon"]) ? $context["icon"] : null)) {
                // line 10
                echo "        <i class=\"fa fa-";
                echo (isset($context["icon"]) ? $context["icon"] : null);
                echo " fa-5x pull-";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "image_align", array());
                echo "\"></i>
        ";
            }
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  50 => 12,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
