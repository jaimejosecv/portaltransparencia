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

/* modules/tb_megamenu/templates/backend/tb-megamenu-item-toolbox.html.twig */
class __TwigTemplate_023b2866f17f8b2a11d049bb61da98880a85de590ac1c9e5a34713102c2ce52a extends \Twig\Template
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
        echo "<div id=\"tb-megamenu-admin-mm-toolitem\" class=\"admin-toolbox\">
  <h3>";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Item Configuration"));
        echo " (<a href=\"#\" class=\"back-megamenu-toolbox\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MegaMenu Toolbox"));
        echo "</a>)</h3>
  <p>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("This allows you to configure each link you added in the Drupal core menu. You can: add block, have it styled by adding extra class, set icon (Bootstrap icons) and add description."));
        echo "</p>
  <ul id=\"toogle-submenu-wrapper\">
    <li>
      <label class=\"hasTip\" title=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submenu"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Enable or disable submenu"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submenu"));
        echo "</label>
      <fieldset class=\"radio btn-group toolitem-sub\">
        <input type=\"radio\" id=\"toggleSub0\" class=\"toolbox-toggle\" data-action=\"toggleSub\" name=\"toggleSub\" value=\"0\" />
        <label for=\"toggleSub0\" title=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Disable submenu"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"toggleSub1\" class=\"toolbox-toggle\" data-action=\"toggleSub\" name=\"toggleSub\" value=\"1\" checked=\"checked\"/>
        <label for=\"toggleSub1\" title=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Enable submenu"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>
  <ul id=\"toogle-group-wrapper\">
    <li>
      <label class=\"hasTip\" title=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Group"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Configure how this item’s submenu display"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Group"));
        echo "</label>
      <fieldset class=\"radio btn-group toolitem-group\">
        <input type=\"radio\" id=\"toggleGroup0\" class=\"toolbox-toggle\" data-action=\"toggleGroup\" name=\"toggleGroup\" value=\"0\" checked=\"checked\"/>
        <label for=\"toggleGroup0\" title=\"";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submenu items show only when hover/click on this tem."));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"toggleGroup1\" class=\"toolbox-toggle\" data-action=\"toggleGroup\" name=\"toggleGroup\" value=\"1\"/>
        <label for=\"toggleGroup1\" title=\"";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Submenu items are visible under this item."));
        echo " \">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>
  <ul id=\"toogle-break-column-wrapper\">
    <li>
      <label class=\"hasTip\" title=\"";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Break column"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move the item to the left/right column, create new column if there’s none on the chosen side."));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Break column"));
        echo "</label>
      <fieldset class=\"btn-group\">
        <a href=\"\" class=\"btn toolitem-moveleft toolbox-action\" data-action=\"moveItemsLeft\" title=\"";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move the items to the left column."));
        echo "\"><i class=\"fa fa-arrow-left\"></i></a>
        <a href=\"\" class=\"btn toolitem-moveright toolbox-action\" data-action=\"moveItemsRight\" title=\"";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move the items to the right column."));
        echo "\"><i class=\"fa fa-arrow-right\"></i></a>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra class"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add extra class to style megamenu."));
        echo "\">
      <label class=\"hasTip\">";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra class"));
        echo "</label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"input-medium toolitem-exclass toolbox-input\" name=\"toolitem-exclass\" data-name=\"class\" value=\"\" />
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Icon"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add Icon for Menu Item. Click Icon label to visit Bootstrap icons page and get Icon Class. E.g.: fa-search"));
        echo "\">
      <label class=\"hasTip\">
        <a href=\"http://twitter.github.com/bootstrap/base-css.html#icons\" target=\"_blank\"><i class=\"fa fa-search\"></i>";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Icon"));
        echo "</a>
      </label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"input-medium toolitem-xicon toolbox-input\" name=\"toolitem-xicon\" data-name=\"xicon\" value=\"\" />
      </fieldset>
    </li>
  </ul>
  <ul>
    <li title=\"";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Item caption"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add caption to this item"));
        echo "\">
      <label class=\"hasTip\">
        ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Item caption"));
        echo "
      </label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"input-large toolitem-caption toolbox-input\" name=\"toolitem-caption\" data-name=\"caption\" value=\"\" />
      </fieldset>
    </li>
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/backend/tb-megamenu-item-toolbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 56,  188 => 54,  177 => 46,  170 => 44,  160 => 37,  154 => 36,  146 => 31,  142 => 30,  133 => 28,  122 => 22,  115 => 20,  105 => 17,  94 => 11,  87 => 9,  77 => 6,  71 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/tb_megamenu/templates/backend/tb-megamenu-item-toolbox.html.twig", "C:\\Jaime\\portaltransparencia\\web\\modules\\tb_megamenu\\templates\\backend\\tb-megamenu-item-toolbox.html.twig");
    }
}
