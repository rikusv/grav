<?php

/* modular/features.html.twig */
class __TwigTemplate_d008b92196ea7dbadd488be8bff14b7c7e747d36f95aab6c30d554006e68fcef extends Twig_Template
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
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    <div class=\"feature-items\">
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 5
            echo "           <div class=\"feature\">
            ";
            // line 6
            if ($this->getAttribute($context["feature"], "icon", array())) {
                // line 7
                echo "                ";
                if ($this->getAttribute($context["feature"], "link", array())) {
                    // line 8
                    echo "                <a href=\"";
                    echo $this->getAttribute($context["feature"], "link", array());
                    echo "\"><i class=\"fa fa-fw fa-";
                    echo $this->getAttribute($context["feature"], "icon", array());
                    echo "\"></i></a>
                ";
                } else {
                    // line 10
                    echo "                <i class=\"fa fa-fw fa-";
                    echo $this->getAttribute($context["feature"], "icon", array());
                    echo "\"></i>
                ";
                }
                // line 12
                echo "            <div class=\"feature-content icon-offset\">
            ";
            } else {
                // line 14
                echo "            <div class=\"feature-content\">
            ";
            }
            // line 16
            echo "            ";
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 17
                echo "            <h4>";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h4>
            ";
            }
            // line 19
            echo "            ";
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 20
                echo "            <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
            ";
            }
            // line 22
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  81 => 22,  75 => 20,  72 => 19,  66 => 17,  63 => 16,  59 => 14,  55 => 12,  49 => 10,  41 => 8,  38 => 7,  36 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }
}
