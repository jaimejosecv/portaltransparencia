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

/* modules/tb_megamenu/templates/backend/tb-megamenu-backend.html.twig */
class __TwigTemplate_b67d1d926b43616ae5aaecd48a470970e71020f2fa76f82986b009e866f4eedd extends \Twig\Template
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
        $tags = array("for" => 16);
        $filters = array("t" => 8, "escape" => 17);
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
        echo "<div id=\"tb-megamenu-admin\" class=\"hidden tb-megamenu-admin tb-megamenu\">
  <div class=\"admin-inline-toolbox clearfix\">
    <div class=\"tb-megamenu-admin-mm-row clearfix\">
      <div id=\"tb-megamenu-admin-mm-tb\">
        <div id=\"toolbox-loading\" class=\"toolbox-loading\">&nbsp;</div>
        <div id=\"toolbox-message\" class=\"toolbox-message\">&nbsp;</div>
        <div id=\"tb-megamenu-admin-mm-intro\" class=\"pull-left admin-toolbox\">
          <h3>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("MegaMenu Toolbox"));
        echo "</h3>
          <p>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("This toolbox includes all settings of megamenu, just select menu then configure. There are 3 level of configuration: sub-megamenu setting, column setting and menu item setting."));
        echo "</p>
          <ul>
            <li id=\"tb-megamenu-style-wrapper\" title=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Select style for this megamenu"));
        echo "\">
              <label class=\"hasTip\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Style"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <select name=\"tb-megamenu-style\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["style_options"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["title"]) {
            // line 17
            echo "                      <option value='";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 17, $this->source), "html", null, true);
            echo "' ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["block_config"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["style"] ?? null) : null) == $context["value"])) ? ("selected") : ("")));
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["title"], 17, $this->source), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                  </select>
                </div>
              </fieldset>
            </li>
            <li id=\"tb-megamenu-animation-wrapper\" title=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Select animation for this megamenu - CSS3 Animation"));
        echo "\">
              <label class=\"hasTip\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Animation"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <select name=\"tb-megamenu-animation\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["animation_options"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["title"]) {
            // line 29
            echo "                      <option value='";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 29, $this->source), "html", null, true);
            echo "' ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["block_config"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["animation"] ?? null) : null) == $context["value"])) ? ("selected") : ("")));
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["title"], 29, $this->source), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "                  </select>
                </div>
              </fieldset>
            </li>
            <li id=\"tb-megamenu-delay-wrapper\" style=\"display: ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["block_config"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["animation"] ?? null) : null) == "none")) ? ("none") : ("inline-block")));
        echo ";\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Delay time of the animation - this field must be an integer."));
        echo "\">
              <label class=\"hasTip\">";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Delay (ms)"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <input class=\"input-medium toolitem-delay toolbox-input\" name=\"tb-megamenu-delay\" type=\"text\" value=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["block_config"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["delay"] ?? null) : null), 39, $this->source), "html", null, true);
        echo "\" data-name=\"delay\"></input>
                </div>
              </fieldset>
            </li>
            <li id=\"tb-megamenu-duration-wrapper\" style=\"display: ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["block_config"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["animation"] ?? null) : null) == "none")) ? ("none") : ("inline-block")));
        echo ";\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Duration of the animation - this field must be an integer."));
        echo "\">
              <label class=\"hasTip\">";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Duration (ms)"));
        echo "</label>
              <fieldset class=\"btn-group\">
                <div class=\"controls tb-controls\">
                  <input class=\"input-medium toolitem-duration toolbox-input\" name=\"tb-megamenu-duration\" type=\"text\" value=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["block_config"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["duration"] ?? null) : null), 47, $this->source), "html", null, true);
        echo "\" data-name=\"duration\"></input>
                </div>
              </fieldset>
            </li>
            <li>
              <label class=\"hasTip\" title=\"";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show/hide the arrow next to items that have submenu."));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Auto arrow"));
        echo "</label>
              <fieldset class=\"radio btn-group toolitem-auto-arrow\" data-auto-arrow=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["block_config"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["auto-arrow"] ?? null) : null), 53, $this->source), "html", null, true);
        echo "\">
                <input type=\"radio\" ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["block_config"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["auto-arrow"] ?? null) : null)) ? ("") : ("checked=\"checked\"")));
        echo " value=\"0\" name=\"tb-megamenu-auto-arrow\" data-action=\"toggleAutoArrow\" class=\"toolbox-toggle\" id=\"toggleAutoArrow0\">
                <label for=\"toggleAutoArrow0\" class=\"btn ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["block_config"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["auto-arrow"] ?? null) : null)) ? ("") : ("active btn-danger")));
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Hide the arrow next to items that have submenu."));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</label>
                <input type=\"radio\" ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["block_config"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["auto-arrow"] ?? null) : null)) ? ("checked=\"checked\"") : ("")));
        echo " value=\"1\" name=\"tb-megamenu-auto-arrow\" data-action=\"toggleAutoArrow\" class=\"toolbox-toggle\" id=\"toggleAutoArrow1\">
                <label for=\"toggleAutoArrow1\" class=\"btn ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["block_config"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["auto-arrow"] ?? null) : null)) ? ("active btn-success") : ("")));
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show the arrow next to items that have submenu."));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</label>
              </fieldset>        
            </li>
            <li>
              <label class=\"hasTip\" title=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show or collapse submenus when browsing on small screens"));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Always show submenu"));
        echo "</label>
              <fieldset class=\"radio btn-group toolitem-always-show-submenu\" data-always-show-submenu=\"";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["block_config"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["always-show-submenu"] ?? null) : null), 62, $this->source), "html", null, true);
        echo "\">
                <input type=\"radio\" ";
        // line 63
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["block_config"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["always-show-submenu"] ?? null) : null)) ? ("") : ("checked=\"checked\"")));
        echo " value=\"0\" name=\"tb-megamenu-always-show-submenu\" data-action=\"toggleAlwayShowSubmenu\" class=\"toolbox-toggle\" id=\"toggleAlwayShowSubmenu0\">
                <label for=\"toggleAlwayShowSubmenu0\" class=\"btn ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["block_config"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["always-show-submenu"] ?? null) : null)) ? ("") : ("active btn-danger")));
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse submenus when browsing on small screens."));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("No"));
        echo "</label>
                <input type=\"radio\" ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["block_config"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["always-show-submenu"] ?? null) : null)) ? ("checked=\"checked\"") : ("")));
        echo " value=\"1\" name=\"tb-megamenu-always-show-submenu\" data-action=\"toggleAlwayShowSubmenu\" class=\"toolbox-toggle\" id=\"toggleAlwayShowSubmenu1\">
                <label for=\"toggleAlwayShowSubmenu1\" class=\"btn ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["block_config"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["always-show-submenu"] ?? null) : null)) ? ("active btn-success") : ("")));
        echo "\" title=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Show submenus when browsing on small screens."));
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
        echo "</label>
              </fieldset>
            </li>
          </ul>
        </div>
        ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_toolbox"] ?? null), 71, $this->source), "html", null, true);
        echo "
        ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submenu_toolbox"] ?? null), 72, $this->source), "html", null, true);
        echo "
        ";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["column_toolbox"] ?? null), 73, $this->source), "html", null, true);
        echo "
      </div>
      <div class=\"toolbox-actions-group\">
        <button class=\"btn btn-success toolbox-action toolbox-saveConfig\" data-action=\"saveConfig\"><i class=\"fa fa-save\"></i> ";
        // line 76
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Save"));
        echo "</button>
        <button class=\"btn btn-danger toolbox-action toolbox-resetConfig\" data-action=\"resetConfig\"><i class=\"fa fa-undo\"></i> ";
        // line 77
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Reset"));
        echo "</button>
      </div>
      <div class=\"toolbox-links-groups\">
        <a href=\"";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["edit_links"] ?? null), 80, $this->source), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Edit links"));
        echo "</a>
      </div>
    </div>
  </div>
  <div id=\"tb-megamenu-admin-mm-container\" class=\"navbar clearfix\">
    ";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_content"] ?? null), 85, $this->source), "html", null, true);
        echo "
  </div> 
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/tb_megamenu/templates/backend/tb-megamenu-backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 85,  286 => 80,  280 => 77,  276 => 76,  270 => 73,  266 => 72,  262 => 71,  250 => 66,  246 => 65,  238 => 64,  234 => 63,  230 => 62,  224 => 61,  213 => 57,  209 => 56,  201 => 55,  197 => 54,  193 => 53,  187 => 52,  179 => 47,  173 => 44,  167 => 43,  160 => 39,  154 => 36,  148 => 35,  142 => 31,  129 => 29,  125 => 28,  118 => 24,  114 => 23,  108 => 19,  95 => 17,  91 => 16,  84 => 12,  80 => 11,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/tb_megamenu/templates/backend/tb-megamenu-backend.html.twig", "C:\\Jaime\\portaltransparencia\\web\\modules\\tb_megamenu\\templates\\backend\\tb-megamenu-backend.html.twig");
    }
}
