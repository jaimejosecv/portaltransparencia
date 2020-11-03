<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/tb_megamenu/templates/tb-megamenu-column.html.twig */
class __TwigTemplate_92aee8d99cb839bbb6e1c84b41e0213f0fe16f882ae51cfd6f1dcd5c0b6a9eae extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("if" => 3, "for" => 6);
        $filters = array("escape" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 1, $this->source), "html", null, true);
        echo ">
  <div class=\"tb-megamenu-column-inner mega-inner clearfix\">
     ";
        // line 3
        if (($context["close_button"] ?? null)) {
            // line 4
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["close_button"] ?? null), 4, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tb_items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 7, $this->source), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/tb-megamenu-column.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 9,  81 => 7,  76 => 6,  70 => 4,  68 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/tb_megamenu/templates/tb-megamenu-column.html.twig", "C:\\Jaime\\portaltransparencia\\web\\modules\\tb_megamenu\\templates\\tb-megamenu-column.html.twig");
    }
}
