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

/* modules/tb_megamenu/templates/backend/tb-megamenu-submenu-toolbox.html.twig */
class __TwigTemplate_b2267533a4fe628a5ad9803af5a1aa84c165fd47a66ccde0c9cde03a56b4bd5e extends \Twig\Template
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
        $tags = array();
        $filters = array("t" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t'],
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
        echo "<div id=\"tb-megamenu-admin-mm-toolsub\" class=\"admin-toolbox\">
  <h3>";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submenu Configuration"));
        echo " (<a href=\"#\" class=\"back-megamenu-toolbox\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MegaMenu Toolbox"));
        echo "</a>)</h3>
  <p>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Contains all the level 2+ items. Allows you to: add and remove row, set the submenu’s position, have it styled, edit its width..."));
        echo "</p>
  <ul>
    <li title=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add row"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add a new row to the selected submenu"));
        echo "\">
      <label class=\"hasTip\"> ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add row"));
        echo " </label>
      <fieldset class=\"btn-group\">
        <a href=\"\" class=\"btn toolsub-addrow toolbox-action\" data-action=\"addRow\"><i class=\"fa fa-plus\"></i></a>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li>
      <label class=\"hasTip\" title=\"";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide when collapse"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide this column when the menu is collapsed on small screens"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide when collapse"));
        echo "</label>
      <fieldset class=\"radio btn-group toolsub-hidewhencollapse\">
        <input type=\"radio\" id=\"togglesubHideWhenCollapse0\" class=\"toolbox-toggle\" data-action=\"hideWhenCollapse\" name=\"togglesubHideWhenCollapse\" value=\"0\" checked=\"checked\"/>
        <label for=\"togglesubHideWhenCollapse0\" title=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Keep showing this submenu when the menu is collapsed on small screens"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"togglesubHideWhenCollapse1\" class=\"toolbox-toggle\" data-action=\"hideWhenCollapse\" name=\"togglesubHideWhenCollapse\" value=\"1\"/>
        <label for=\"togglesubHideWhenCollapse1\" title=\"";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide this submenu when the menu is collapsed on small screens"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>                    
  <ul>
    <li title=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submenu width (px)"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Set submenu width (in pixel), this field must be a integer"));
        echo "\">
      <label class=\"hasTip\">";
        // line 25
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submenu width (px)"));
        echo "</label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"toolsub-width toolbox-input input-small\" name=\"toolsub-width\" data-name=\"width\" value=\"\" />
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Alignment"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Align this submenu"));
        echo "\">
      <label class=\"hasTip\">";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Alignment"));
        echo "</label>
      <fieldset class=\"toolsub-alignment\">
        <div class=\"btn-group\">
        <a class=\"btn toolsub-align-left toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"left\" title=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Left"));
        echo "\"><i class=\"fa fa-align-left\"></i></a>
        <a class=\"btn toolsub-align-right toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"right\" title=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Right"));
        echo "\"><i class=\"fa fa-align-right\"></i></a>
        <a class=\"btn toolsub-align-center toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"center\" title=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Center"));
        echo "\"><i class=\"fa fa-align-center\"></i></a>
        <a class=\"btn toolsub-align-justify toolbox-action\" href=\"#\" data-action=\"alignment\" data-align=\"justify\" title=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Justify"));
        echo "\"><i class=\"fa fa-align-justify\"></i></a>
        </div>
      </fieldset>
    </li>
  </ul>          
  <ul>
    <li title=\"";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra class"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add extra class to style megamenu"));
        echo "\">
      <label class=\"hasTip\">";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra class"));
        echo "</label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"toolsub-exclass toolbox-input input-medium\" name=\"toolsub-exclass\" data-name=\"class\" value=\"\" />
      </fieldset>
    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/backend/tb-megamenu-submenu-toolbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 46,  169 => 45,  160 => 39,  156 => 38,  152 => 37,  148 => 36,  142 => 33,  136 => 32,  126 => 25,  120 => 24,  110 => 19,  103 => 17,  93 => 14,  82 => 6,  76 => 5,  71 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/tb_megamenu/templates/backend/tb-megamenu-submenu-toolbox.html.twig", "C:\\Jaime\\portaltransparencia\\web\\modules\\tb_megamenu\\templates\\backend\\tb-megamenu-submenu-toolbox.html.twig");
    }
}
