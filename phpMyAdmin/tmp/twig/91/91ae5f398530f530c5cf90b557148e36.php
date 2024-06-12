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

/* database/structure/copy_form.twig */
class __TwigTemplate_6f2ee6d37dc9b09feecfc09c5ab80fe4 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<form id=\"ajax_form\" action=\"";
        echo PhpMyAdmin\Url::getFromRoute("/database/structure/copy-table");
        echo "\" method=\"post\">
  ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["url_params"] ?? null));
        echo "

  <fieldset class=\"pma-fieldset\">
    <strong><label for=\"db_name_dropdown\">";
echo _gettext("Database:");
        // line 5
        echo "</label></strong>
    <select id=\"db_name_dropdown\" name=\"target_db\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["each_db"]) {
            // line 8
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["each_db"], "is_selected", [], "any", false, false, false, 8)) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["each_db"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['each_db'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </select>

    <br><br>

    <strong><label>";
echo _gettext("Options:");
        // line 14
        echo "</label></strong>

    <br>

    <input type=\"radio\" id=\"what_structure\" value=\"structure\" name=\"what\">
    <label for=\"what_structure\">";
echo _gettext("Structure only");
        // line 19
        echo "</label>

    <br>

    <input type=\"radio\" id=\"what_data\" value=\"data\" name=\"what\" checked>
    <label for=\"what_data\">";
echo _gettext("Structure and data");
        // line 24
        echo "</label>

    <br>

    <input type=\"radio\" id=\"what_dataonly\" value=\"dataonly\" name=\"what\">
    <label for=\"what_dataonly\">";
echo _gettext("Data only");
        // line 29
        echo "</label>

    <br><br>

    <input type=\"checkbox\" id=\"checkbox_drop\" value=\"true\" name=\"drop_if_exists\">
    <label for=\"checkbox_drop\">";
echo _gettext("Add DROP TABLE");
        // line 34
        echo "</label>

    <br>

    <input type=\"checkbox\" id=\"checkbox_auto_increment_cp\" value=\"1\" name=\"sql_auto_increment\">
    <label for=\"checkbox_auto_increment_cp\">";
echo _gettext("Add AUTO INCREMENT value");
        // line 39
        echo "</label>

    <br>

    <input type=\"checkbox\" id=\"checkbox_constraints\" value=\"1\" name=\"sql_auto_increment\" checked>
    <label for=\"checkbox_constraints\">";
echo _gettext("Add constraints");
        // line 44
        echo "</label>

    <br><br>

    <input type=\"checkbox\" name=\"adjust_privileges\" value=\"1\" id=\"checkbox_adjust_privileges\" checked>
    <label for=\"checkbox_adjust_privileges\">
      ";
echo _gettext("Adjust privileges");
        // line 51
        echo "      ";
        echo PhpMyAdmin\Html\MySQLDocumentation::showDocumentation("faq", "faq6-39");
        echo "
    </label>
  </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "database/structure/copy_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 51,  125 => 44,  117 => 39,  109 => 34,  101 => 29,  93 => 24,  85 => 19,  77 => 14,  70 => 10,  57 => 8,  53 => 7,  49 => 5,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "database/structure/copy_form.twig", "/home/santo-singh/Documents/Sites/phpMyAdmin/templates/database/structure/copy_form.twig");
    }
}
