<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_bff560d2ea301de665947a12dcfe4a02f9ac9113b938110bb03d5792b6dcbbcd extends Twig_Template
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
        echo "<div class=\"list-item\">

    <div class=\"list-blog-header\">
        <span class=\"list-blog-date\">
            <span>";
        // line 5
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "d");
        echo "</span>
            <em>";
        // line 6
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "M");
        echo "</em>
        </span>
        ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array())) {
            // line 9
            echo "            <h4>
                ";
            // line 10
            if ( !($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
                // line 11
                echo "                <a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\"><i class=\"fa fa-angle-double-right\"></i></a>
                ";
            }
            // line 13
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a>
            </h4>
        ";
        } else {
            // line 16
            echo "            <h4><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo "</a></h4>
        ";
        }
        // line 18
        echo "
        ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array())) {
            // line 20
            echo "        <span class=\"tags\">
            ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 22
                echo "            <a href=\"";
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        </span>
        ";
        }
        // line 26
        echo "        ";
        if ((isset($context["big_header"]) ? $context["big_header"] : null)) {
            // line 27
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropResize", array(0 => 900, 1 => 600), "method"), "html", array());
            echo "
        ";
        } else {
            // line 29
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array())), "cropZoom", array(0 => 900, 1 => 300), "method"), "html", array());
            echo "
        ";
        }
        // line 31
        echo "
    </div>

    <div class=\"list-blog-padding\">

    ";
        // line 36
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "continue_link", array()) === false)) {
            // line 37
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 38
            if ( !(isset($context["truncate"]) ? $context["truncate"] : null)) {
                // line 39
                echo "        ";
                $context["show_prev_next"] = true;
                // line 40
                echo "        ";
            }
            // line 41
            echo "    ";
        } elseif (((isset($context["truncate"]) ? $context["truncate"] : null) && ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())))) {
            // line 42
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
            echo "</p>
        <p><a href=\"";
            // line 43
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 44
(isset($context["truncate"]) ? $context["truncate"] : null)) {
            // line 45
            echo "        ";
            if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array()) != $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()))) {
                // line 46
                echo "            <p>";
                echo $this->env->getExtension('GravTwigExtension')->truncateFilter($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), 550);
                echo "</p>
        ";
            } else {
                // line 48
                echo "            <p>";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
                echo "</p>
        ";
            }
            // line 50
            echo "        <p><a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 52
            echo "        <p>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
            echo "</p>
        ";
            // line 53
            $context["show_prev_next"] = true;
            // line 54
            echo "    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((isset($context["show_prev_next"]) ? $context["show_prev_next"] : null)) {
            // line 57
            echo "
        <p class=\"prev-next\">
            ";
            // line 59
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
                // line 60
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 62
            echo "
            ";
            // line 63
            if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
                // line 64
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 66
            echo "        </p>
    ";
        }
        // line 68
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 68,  204 => 66,  198 => 64,  196 => 63,  193 => 62,  187 => 60,  185 => 59,  181 => 57,  179 => 56,  176 => 55,  173 => 54,  171 => 53,  166 => 52,  160 => 50,  154 => 48,  148 => 46,  145 => 45,  143 => 44,  139 => 43,  134 => 42,  131 => 41,  128 => 40,  125 => 39,  123 => 38,  118 => 37,  116 => 36,  109 => 31,  103 => 29,  97 => 27,  94 => 26,  90 => 24,  76 => 22,  72 => 21,  69 => 20,  67 => 19,  64 => 18,  56 => 16,  47 => 13,  41 => 11,  39 => 10,  36 => 9,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
