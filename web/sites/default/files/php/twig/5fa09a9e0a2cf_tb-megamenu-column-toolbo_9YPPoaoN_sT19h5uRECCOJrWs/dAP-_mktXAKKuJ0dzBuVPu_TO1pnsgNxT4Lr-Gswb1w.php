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

/* modules/tb_megamenu/templates/backend/tb-megamenu-column-toolbox.html.twig */
class __TwigTemplate_70b30b6fbfca0635b5d3a1d14100ff4ba85bdbfe66335c3e3cb732ade05fd84b extends \Twig\Template
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
        $tags = array("for" => 60);
        $filters = array("t" => 2, "escape" => 61);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['t', 'escape'],
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
        echo "<div id=\"tb-megamenu-admin-mm-toolcol\" class=\"admin-toolbox\">
  <h3>";
        // line 2
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Column Configuration"));
        echo "(<a href=\"#\" class=\"back-megamenu-toolbox\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MegaMenu Toolbox"));
        echo "</a>)</h3>
  <p>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Allows you to: add and remove column, set grid, add block to column and style the column with extra class"));
        echo "</p>
  <ul>
    <li>
      <label class=\"hasTip\" title=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add/remove Column"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click + to add a new column on the right of the selected column. Click - to remove the selected column"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add/remove Column"));
        echo "</label>
      <fieldset class=\"btn-group\">
        <a href=\"\" class=\"btn toolcol-addcol toolbox-action first\" data-action=\"addColumn\" title=\"";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add a new column on the right of the selected column"));
        echo "\"><i class=\"fa fa-plus\"></i></a>
        <a href=\"\" class=\"btn toolcol-removecol toolbox-action last\" data-action=\"removeColumn\" title=\"";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Remove the selected column"));
        echo "\"><i class=\"fa fa-minus\"></i></a>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li>
      <label class=\"hasTip\" title=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move Row up/down"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Click up arrow to move the selected row up. Click down arrow to move the selected row down"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move Row up/down"));
        echo "</label>
      <fieldset class=\"btn-group\">
        <a href=\"\" class=\"btn toolcol-addcol toolbox-action first\" data-action=\"rowUp\" title=\"";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move the selected row up"));
        echo "\"><i class=\"fa fa-arrow-up\"></i></a>
        <a href=\"\" class=\"btn toolcol-removecol toolbox-action last\" data-action=\"rowDown\" title=\"";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Move the selected row downn"));
        echo "\"><i class=\"fa fa-arrow-down\"></i></a>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li>
      <label class=\"hasTip\" title=\"";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide when collapse"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide this column when the menu is collapsed on small screen"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide when collapse"));
        echo "</label>
      <fieldset class=\"radio btn-group toolcol-hidewhencollapse\">
        <input type=\"radio\" id=\"toggleHideWhenCollapse0\" class=\"toolbox-toggle\" data-action=\"hideWhenCollapse\" name=\"toggleHideWhenCollapse\" value=\"0\" checked=\"checked\"/>
        <label for=\"toggleHideWhenCollapse0\" title=\"";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Keep showing this column when the menu is collapsed on small screen"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"toggleHideWhenCollapse1\" class=\"toolbox-toggle\" data-action=\"hideWhenCollapse\" name=\"toggleHideWhenCollapse\" value=\"1\"/>
        <label for=\"toggleHideWhenCollapse1\" title=\"<?php print t('Hide this column when the menu is collapsed on small screen') ?>\">";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li id=\"tb-megamenu-grid-wrapper\" title=\"";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Grid (1-12)"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Set number of grid columns the selected column spans"));
        echo "\">
      <label class=\"hasTip\">";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Grid (1-12)"));
        echo "</label>
      <fieldset class=\"\">
        <select class=\"toolcol-width toolbox-input toolbox-select input-mini\" name=\"toolcol-width\" data-name=\"width\">
          <option value=\"1\">1</option>
          <option value=\"2\">2</option>
          <option value=\"3\">3</option>
          <option value=\"4\">4</option>
          <option value=\"5\">5</option>
          <option value=\"6\">6</option>
          <option value=\"7\">7</option>
          <option value=\"8\">8</option>
          <option value=\"9\">9</option>
          <option value=\"10\">10</option>
          <option value=\"11\">11</option>
          <option value=\"12\">12</option>
        </select>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li id=\"tb-megamenu-block-wrapper\" title=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Blocks"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add/replace a block to the selected column"));
        echo "\">
      <label class=\"hasTip\">";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Blocks"));
        echo "</label>
      <fieldset class=\"btn-group\">
        <select class=\"toolcol-block toolbox-input toolbox-select input-medium\" name=\"toolcol-block\" data-name=\"block\" data-placeholder=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Select Block"));
        echo "\" style=\"width: 200px;\">
          <option value=\"\"></option>
          ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blocks_options"] ?? null));
        foreach ($context['_seq'] as $context["block_id"] => $context["block"]) {
            // line 61
            echo "            <option value=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["block_id"], 61, $this->source), "html", null, true);
            echo "\"> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["block"], 61, $this->source), "html", null, true);
            echo " </option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['block_id'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </select>
      </fieldset>
    </li>
  </ul>
  <ul>
    <li>
      <label class=\"hasTip\" title=\"";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show block title"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show block title"));
        echo "</label>
      <fieldset class=\"radio btn-group toolcol-showblocktitle\">
        <input type=\"radio\" id=\"toggleShowBlockTitle0\" class=\"toolbox-toggle\" data-action=\"showBlockTitle\" name=\"toggleShowBlockTitle\" value=\"0\"/>
        <label for=\"toggleShowBlockTitle0\">";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</label>
        <input type=\"radio\" id=\"toggleShowBlockTitle1\" class=\"toolbox-toggle\" data-action=\"showBlockTitle\" name=\"toggleShowBlockTitle\" value=\"1\" checked=\"checked\"/>
        <label for=\"toggleShowBlockTitle1\">";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</label>
      </fieldset>
    </li>
  </ul>          
  <ul>
    <li title=\"";
        // line 79
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra class"));
        echo " - ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add extra class to style megamenu"));
        echo "\">
      <label class=\"hasTip\">";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extra class"));
        echo "</label>
      <fieldset class=\"\">
        <input type=\"text\" class=\"input-medium toolcol-exclass toolbox-input\" name=\"toolcol-exclass\" data-name=\"class\" value=\"\" />
      </fieldset>
    </li>
  </ul>
</div>    
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/backend/tb-megamenu-column-toolbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 80,  235 => 79,  227 => 74,  222 => 72,  214 => 69,  206 => 63,  195 => 61,  191 => 60,  186 => 58,  181 => 56,  175 => 55,  152 => 35,  146 => 34,  138 => 29,  131 => 27,  121 => 24,  112 => 18,  108 => 17,  99 => 15,  90 => 9,  86 => 8,  77 => 6,  71 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/tb_megamenu/templates/backend/tb-megamenu-column-toolbox.html.twig", "C:\\Jaime\\portaltransparencia\\web\\modules\\tb_megamenu\\templates\\backend\\tb-megamenu-column-toolbox.html.twig");
    }
}
