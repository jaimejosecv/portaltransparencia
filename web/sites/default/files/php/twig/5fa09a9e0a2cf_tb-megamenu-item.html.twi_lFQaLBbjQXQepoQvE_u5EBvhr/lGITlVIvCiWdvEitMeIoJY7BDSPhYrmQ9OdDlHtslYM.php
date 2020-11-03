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

/* modules/tb_megamenu/templates/tb-megamenu-item.html.twig */
class __TwigTemplate_8e0353df3d4141fff02baab68254fae3d58890738977fa38c0b7ca3524c19d22 extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 2);
        $filters = array("escape" => 13, "raw" => 14, "t" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'raw', 't'],
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
        $context["linkAttributes"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["link"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["attributes"] ?? null) : null);
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "url", [], "array", true, true, true, 2) &&  !twig_test_empty((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["link"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["url"] ?? null) : null)))) {
            // line 3
            echo "  ";
            $context["tag"] = "a";
            // line 4
            echo "  ";
            $context["href"] = ((" href='" . $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["link"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["url"] ?? null) : null), 4, $this->source)) . "'");
        } else {
            // line 6
            echo "  ";
            $context["tag"] = "span";
            // line 7
            echo "  ";
            $context["href"] = "";
            // line 8
            echo "  ";
            $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "addClass", [0 => "tb-megamenu-no-link"], "method", false, false, true, 8), "setAttribute", [0 => "tabindex", 1 => "0"], "method", false, false, true, 8);
            // line 9
            echo "  ";
            if (twig_test_empty(($context["submenu"] ?? null))) {
                // line 10
                echo "    ";
                $context["linkAttributes"] = twig_get_attribute($this->env, $this->source, ($context["linkAttributes"] ?? null), "addClass", [0 => "tb-megamenu-no-submenu"], "method", false, false, true, 10);
                // line 11
                echo "  ";
            }
        }
        // line 13
        echo "<li ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 13, $this->source), "html", null, true);
        echo " >
  <";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 14, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["href"] ?? null), 14, $this->source));
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["link"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["attributes"] ?? null) : null), 14, $this->source), "html", null, true);
        echo ">
    ";
        // line 15
        if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["item_config"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["xicon"] ?? null) : null)) {
            // line 16
            echo "      <i class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["item_config"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["xicon"] ?? null) : null), 16, $this->source), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 18
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "title_translate", [], "any", false, false, true, 18), 18, $this->source)));
        echo "
    ";
        // line 19
        if ((($context["submenu"] ?? null) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["block_config"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["auto-arrow"] ?? null) : null))) {
            // line 20
            echo "      <span class=\"caret\"></span>
    ";
        }
        // line 22
        echo "    ";
        if ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["item_config"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["caption"] ?? null) : null)) {
            // line 23
            echo "      <span class=\"mega-caption\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["item_config"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["caption"] ?? null) : null), 23, $this->source)));
            echo "</span>
    ";
        }
        // line 25
        echo "  </";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 25, $this->source), "html", null, true);
        echo ">
  ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submenu"] ?? null), 26, $this->source), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/tb-megamenu-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 26,  132 => 25,  126 => 23,  123 => 22,  119 => 20,  117 => 19,  112 => 18,  106 => 16,  104 => 15,  97 => 14,  92 => 13,  88 => 11,  85 => 10,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  69 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/tb_megamenu/templates/tb-megamenu-item.html.twig", "C:\\Jaime\\portaltransparencia\\web\\modules\\tb_megamenu\\templates\\tb-megamenu-item.html.twig");
    }
}
