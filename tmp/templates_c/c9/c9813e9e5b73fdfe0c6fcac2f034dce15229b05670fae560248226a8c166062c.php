<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @DevicesDetection/detection.twig */
class __TwigTemplate_0abd838e90d488da2a3ea31f826087c6d50bb59a7121da02c2253f53cd61a24e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_DeviceDetection"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@DevicesDetection/detection.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    <script type=\"text/javascript\">

        function showList(type) {
            var ajaxHandler = new ajaxHelper();
            ajaxHandler.addParams({
                module: 'DevicesDetection',
                action: 'showList',
                type: type
            }, 'GET');
            ajaxHandler.setFormat('html');
            ajaxHandler.setCallback(function(response){
                var \$list = \$('#deviceDetectionItemList');
                \$list.find('.itemList').html(response);
                piwikHelper.modalConfirm(\$list, [], {fixedFooter: true});
            });
            ajaxHandler.send();
        }

    </script>

    <style type=\"text/css\">
        textarea {
            width: 700px;
            display: block;
        }

        .detection {
            padding-top:10px;
        }
        .detection td {
            width: 50%;
        }
        .detection td img {
            margin-right: 10px;
        }
    </style>

    <div piwik-content-block content-title=\"";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "\">
        <h3>";
        // line 45
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_UserAgent"]), "html_attr");
        echo "</h3>

        <form action=\"";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [[]]), "html", null, true);
        echo "\" method=\"POST\">
            <textarea name=\"ua\">";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, ($context["userAgent"] ?? $this->getContext($context, "userAgent")), "html", null, true);
        echo "</textarea>
            <br />
            <input type=\"submit\" value=\"";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Refresh"]), "html", null, true);
        echo "\" class=\"btn\" />
        </form>

        ";
        // line 53
        if (($context["bot_info"] ?? $this->getContext($context, "bot_info"))) {
            // line 54
            echo "
        <h3>";
            // line 55
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_BotDetected", $this->getAttribute(($context["bot_info"] ?? $this->getContext($context, "bot_info")), "name", [])]), "html", null, true);
            echo "</h3>

        ";
        } else {
            // line 58
            echo "
        <h3>";
            // line 59
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_ColumnOperatingSystem"]), "html_attr");
            echo "</h3>
        <table class=\"detection\" piwik-content-table>
            <tbody>
            <tr>
                <td>";
            // line 63
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Name"]), "html", null, true);
            echo " <small>(<a href=\"javascript:showList('os');\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Mobile_ShowAll"]), "html", null, true);
            echo "</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"";
            // line 64
            echo \Piwik\piwik_escape_filter($this->env, ($context["os_logo"] ?? $this->getContext($context, "os_logo")), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, ($context["os_name"] ?? $this->getContext($context, "os_name")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 67
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Version"]), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo \Piwik\piwik_escape_filter($this->env, ($context["os_version"] ?? $this->getContext($context, "os_version")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 71
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_OperatingSystemFamily"]), "html", null, true);
            echo "  <small>(<a href=\"javascript:showList('osfamilies');\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Mobile_ShowAll"]), "html", null, true);
            echo "</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"";
            // line 72
            echo \Piwik\piwik_escape_filter($this->env, ($context["os_family_logo"] ?? $this->getContext($context, "os_family_logo")), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, ($context["os_family"] ?? $this->getContext($context, "os_family")), "html", null, true);
            echo "</td>
            </tr>
            </tbody>
        </table>

        <h3>";
            // line 77
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_ColumnBrowser"]), "html", null, true);
            echo "</h3>
        <table class=\"detection\" piwik-content-table>
            <tbody>
            <tr>
                <td>";
            // line 81
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Name"]), "html", null, true);
            echo " <small>(<a href=\"javascript:showList('browsers');\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Mobile_ShowAll"]), "html", null, true);
            echo "</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"";
            // line 82
            echo \Piwik\piwik_escape_filter($this->env, ($context["browser_logo"] ?? $this->getContext($context, "browser_logo")), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, ($context["browser_name"] ?? $this->getContext($context, "browser_name")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 85
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CorePluginsAdmin_Version"]), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo \Piwik\piwik_escape_filter($this->env, ($context["browser_version"] ?? $this->getContext($context, "browser_version")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 89
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_BrowserFamily"]), "html", null, true);
            echo " <small>(<a href=\"javascript:showList('browserfamilies');\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Mobile_ShowAll"]), "html", null, true);
            echo "</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"";
            // line 90
            echo \Piwik\piwik_escape_filter($this->env, ($context["browser_family_logo"] ?? $this->getContext($context, "browser_family_logo")), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, ($context["browser_family"] ?? $this->getContext($context, "browser_family")), "html", null, true);
            echo "</td>
            </tr>
            </tbody>
        </table>

        <h3>";
            // line 95
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_Device"]), "html", null, true);
            echo "</h3>
        <table class=\"detection\" piwik-content-table>
            <tbody>
            <tr>
                <td>";
            // line 99
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_dataTableLabelTypes"]), "html", null, true);
            echo " <small>(<a href=\"javascript:showList('devicetypes');\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Mobile_ShowAll"]), "html", null, true);
            echo "</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"";
            // line 100
            echo \Piwik\piwik_escape_filter($this->env, ($context["device_type_logo"] ?? $this->getContext($context, "device_type_logo")), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, ($context["device_type"] ?? $this->getContext($context, "device_type")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 103
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_dataTableLabelBrands"]), "html", null, true);
            echo " <small>(<a href=\"javascript:showList('brands');\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Mobile_ShowAll"]), "html", null, true);
            echo "</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"";
            // line 104
            echo \Piwik\piwik_escape_filter($this->env, ($context["device_brand_logo"] ?? $this->getContext($context, "device_brand_logo")), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, ($context["device_brand"] ?? $this->getContext($context, "device_brand")), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <td>";
            // line 107
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_dataTableLabelModels"]), "html", null, true);
            echo "</td>
                <td>";
            // line 108
            echo \Piwik\piwik_escape_filter($this->env, ($context["device_model"] ?? $this->getContext($context, "device_model")), "html", null, true);
            echo "</td>
            </tr></tbody>
        </table>

        ";
        }
        // line 113
        echo "    </div>

    <div class=\"ui-confirm\" id=\"deviceDetectionItemList\">
        <div class=\"itemList\"> </div>
        <input role=\"close\" type=\"button\" value=\"";
        // line 117
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Close"]), "html", null, true);
        echo "\"/>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@DevicesDetection/detection.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 117,  266 => 113,  258 => 108,  254 => 107,  246 => 104,  240 => 103,  232 => 100,  226 => 99,  219 => 95,  209 => 90,  203 => 89,  197 => 86,  193 => 85,  185 => 82,  179 => 81,  172 => 77,  162 => 72,  156 => 71,  150 => 68,  146 => 67,  138 => 64,  132 => 63,  125 => 59,  122 => 58,  116 => 55,  113 => 54,  111 => 53,  105 => 50,  100 => 48,  96 => 47,  91 => 45,  87 => 44,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'DevicesDetection_DeviceDetection'|translate }}{% endset %}

{% block content %}

    <script type=\"text/javascript\">

        function showList(type) {
            var ajaxHandler = new ajaxHelper();
            ajaxHandler.addParams({
                module: 'DevicesDetection',
                action: 'showList',
                type: type
            }, 'GET');
            ajaxHandler.setFormat('html');
            ajaxHandler.setCallback(function(response){
                var \$list = \$('#deviceDetectionItemList');
                \$list.find('.itemList').html(response);
                piwikHelper.modalConfirm(\$list, [], {fixedFooter: true});
            });
            ajaxHandler.send();
        }

    </script>

    <style type=\"text/css\">
        textarea {
            width: 700px;
            display: block;
        }

        .detection {
            padding-top:10px;
        }
        .detection td {
            width: 50%;
        }
        .detection td img {
            margin-right: 10px;
        }
    </style>

    <div piwik-content-block content-title=\"{{ title|e('html_attr') }}\">
        <h3>{{ 'DevicesDetection_UserAgent'|translate|e('html_attr') }}</h3>

        <form action=\"{{ linkTo({}) }}\" method=\"POST\">
            <textarea name=\"ua\">{{ userAgent }}</textarea>
            <br />
            <input type=\"submit\" value=\"{{ 'General_Refresh'|translate }}\" class=\"btn\" />
        </form>

        {% if bot_info %}

        <h3>{{ 'DevicesDetection_BotDetected'|translate(bot_info.name) }}</h3>

        {% else %}

        <h3>{{ 'DevicesDetection_ColumnOperatingSystem'|translate|e('html_attr') }}</h3>
        <table class=\"detection\" piwik-content-table>
            <tbody>
            <tr>
                <td>{{ 'General_Name'|translate }} <small>(<a href=\"javascript:showList('os');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"{{ os_logo }}\" />{{ os_name }}</td>
            </tr>
            <tr>
                <td>{{ 'CorePluginsAdmin_Version'|translate }}</td>
                <td>{{ os_version }}</td>
            </tr>
            <tr>
                <td>{{ 'DevicesDetection_OperatingSystemFamily'|translate }}  <small>(<a href=\"javascript:showList('osfamilies');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"{{ os_family_logo }}\" />{{ os_family }}</td>
            </tr>
            </tbody>
        </table>

        <h3>{{ 'DevicesDetection_ColumnBrowser'|translate }}</h3>
        <table class=\"detection\" piwik-content-table>
            <tbody>
            <tr>
                <td>{{ 'General_Name'|translate }} <small>(<a href=\"javascript:showList('browsers');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"{{ browser_logo }}\" />{{ browser_name }}</td>
            </tr>
            <tr>
                <td>{{ 'CorePluginsAdmin_Version'|translate }}</td>
                <td>{{ browser_version }}</td>
            </tr>
            <tr>
                <td>{{ 'DevicesDetection_BrowserFamily'|translate }} <small>(<a href=\"javascript:showList('browserfamilies');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"{{ browser_family_logo }}\" />{{ browser_family }}</td>
            </tr>
            </tbody>
        </table>

        <h3>{{ 'DevicesDetection_Device'|translate }}</h3>
        <table class=\"detection\" piwik-content-table>
            <tbody>
            <tr>
                <td>{{ 'DevicesDetection_dataTableLabelTypes'|translate }} <small>(<a href=\"javascript:showList('devicetypes');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"{{ device_type_logo }}\" />{{ device_type }}</td>
            </tr>
            <tr>
                <td>{{ 'DevicesDetection_dataTableLabelBrands'|translate }} <small>(<a href=\"javascript:showList('brands');\">{{ 'Mobile_ShowAll'|translate }}</a>)</small></td>
                <td><img height=\"16px\" width=\"16px\" src=\"{{ device_brand_logo }}\" />{{ device_brand }}</td>
            </tr>
            <tr>
                <td>{{ 'DevicesDetection_dataTableLabelModels'|translate }}</td>
                <td>{{ device_model }}</td>
            </tr></tbody>
        </table>

        {% endif %}
    </div>

    <div class=\"ui-confirm\" id=\"deviceDetectionItemList\">
        <div class=\"itemList\"> </div>
        <input role=\"close\" type=\"button\" value=\"{{ 'General_Close'|translate }}\"/>
    </div>

{% endblock %}
", "@DevicesDetection/detection.twig", "/home/vagrant/code/matomo-demo/plugins/DevicesDetection/templates/detection.twig");
    }
}
