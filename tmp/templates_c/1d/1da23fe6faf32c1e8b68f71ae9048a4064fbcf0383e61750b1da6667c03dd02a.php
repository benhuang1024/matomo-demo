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

/* @UsersManager/userSettings.twig */
class __TwigTemplate_3afcd54711d5bc985e230bf3d4cdfb0ce1a895c224643789599067fe07572ea5 extends \Twig\Template
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_PersonalSettings"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@UsersManager/userSettings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
<div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
    <h2>";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokenRegenerateConfirmSelf"]), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 10
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
</div>

<div piwik-content-block content-title=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html_attr");
        echo "\" feature=\"true\">
    <form id=\"userSettingsTable\" piwik-form ng-controller=\"PersonalSettingsController as personalSettings\">

        <div piwik-field uicontrol=\"text\" name=\"username\"
             data-title=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Username"]), "html_attr");
        echo "\"
             value=\"";
        // line 18
        echo \Piwik\piwik_escape_filter($this->env, ($context["userLogin"] ?? $this->getContext($context, "userLogin")), "html", null, true);
        echo "\" data-disabled=\"true\"
             ng-model=\"personalSettings.username\"
             inline-help=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_YourUsernameCannotBeChanged"]), "html_attr");
        echo "\">
        </div>

        ";
        // line 23
        if (($context["isUsersAdminEnabled"] ?? $this->getContext($context, "isUsersAdminEnabled"))) {
            // line 24
            echo "        <div piwik-field uicontrol=\"text\" name=\"email\"
             ng-model=\"personalSettings.email\"
             ng-change=\"personalSettings.requirePasswordConfirmation()\"
             maxlength=\"100\"
             data-title=\"";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_Email"]), "html_attr");
            echo "\"
             value=\"";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, ($context["userEmail"] ?? $this->getContext($context, "userEmail")), "html", null, true);
            echo "\">
        </div>
        ";
        }
        // line 32
        echo "
        <div id=\"languageHelp\" class=\"inline-help-node\">
            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/translations/\">
                ";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["LanguagesManager_AboutPiwikTranslations"]), "html", null, true);
        echo "</a>
        </div>

        <div piwik-field uicontrol=\"select\" name=\"language\"
             ng-model=\"personalSettings.language\"
             data-title=\"";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Language"]), "html_attr");
        echo "\"
             options=\"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["languageOptions"] ?? $this->getContext($context, "languageOptions"))), "html", null, true);
        echo "\"
             inline-help=\"#languageHelp\"
             value=\"";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, ($context["currentLanguageCode"] ?? $this->getContext($context, "currentLanguageCode")), "html", null, true);
        echo "\">
        </div>

        <div piwik-field uicontrol=\"select\" name=\"timeformat\"
             ng-model=\"personalSettings.timeformat\"
             data-title=\"";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TimeFormat"]), "html_attr");
        echo "\"
             value=\"";
        // line 49
        echo \Piwik\piwik_escape_filter($this->env, ($context["currentTimeformat"] ?? $this->getContext($context, "currentTimeformat")), "html", null, true);
        echo "\" options=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["timeFormats"] ?? $this->getContext($context, "timeFormats"))), "html", null, true);
        echo "\">
        </div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultReport\"
             ng-model=\"personalSettings.defaultReport\"
             introduction=\"";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ReportToLoadByDefault"]), "html_attr");
        echo "\"
             data-title=\"";
        // line 55
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AllWebsitesDashboard"]), "html_attr");
        echo "\"
             value=\"";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, ($context["defaultReport"] ?? $this->getContext($context, "defaultReport")), "html", null, true);
        echo "\" options=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["defaultReportOptions"] ?? $this->getContext($context, "defaultReportOptions"))), "html", null, true);
        echo "\">
        </div>

        <div piwik-siteselector
             ng-model=\"personalSettings.site\"
             show-selected-site=\"true\"
             class=\"sites_autocomplete\"
             siteid=\"";
        // line 63
        echo \Piwik\piwik_escape_filter($this->env, ($context["defaultReportIdSite"] ?? $this->getContext($context, "defaultReportIdSite")), "html", null, true);
        echo "\"
             sitename=\"";
        // line 64
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [($context["defaultReportSiteName"] ?? $this->getContext($context, "defaultReportSiteName"))]);
        echo "\"
             switch-site-on-select=\"false\"
             show-all-sites-item=\"false\"
             showselectedsite=\"true\"
             id=\"defaultReportSiteSelector\"
        ></div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultDate\"
             ng-model=\"personalSettings.defaultDate\"
             introduction=\"";
        // line 73
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ReportDateToLoadByDefault"]), "html_attr");
        echo "\"
             value=\"";
        // line 74
        echo \Piwik\piwik_escape_filter($this->env, ($context["defaultDate"] ?? $this->getContext($context, "defaultDate")), "html", null, true);
        echo "\" options=\"";
        echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["availableDefaultDates"] ?? $this->getContext($context, "availableDefaultDates"))), "html", null, true);
        echo "\">
        </div>

        ";
        // line 77
        if ((((isset($context["isValidHost"]) || array_key_exists("isValidHost", $context)) && ($context["isValidHost"] ?? $this->getContext($context, "isValidHost"))) && ($context["isUsersAdminEnabled"] ?? $this->getContext($context, "isUsersAdminEnabled")))) {
            // line 78
            echo "
            <div piwik-field uicontrol=\"password\" name=\"password\" autocomplete=\"off\"
                 ng-model=\"personalSettings.password\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 introduction=\"";
            // line 82
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ChangePassword"]), "html_attr");
            echo "\"
                 data-title=\"";
            // line 83
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_NewPassword"]), "html_attr");
            echo "\"
                 value=\"\" inline-help=\"";
            // line 84
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne"]), "html_attr");
            echo "\">
            </div>

            <div piwik-field uicontrol=\"password\" name=\"passwordBis\" autocomplete=\"off\"
                 ng-model=\"personalSettings.passwordBis\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 data-title=\"";
            // line 90
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_NewPasswordRepeat"]), "html_attr");
            echo "\"
                 value=\"\" inline-help=\"";
            // line 91
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TypeYourPasswordAgain"]), "html_attr");
            echo "\">
            </div>
        ";
        }
        // line 94
        echo "
        ";
        // line 95
        if (( !(isset($context["isValidHost"]) || array_key_exists("isValidHost", $context)) ||  !($context["isValidHost"] ?? $this->getContext($context, "isValidHost")))) {
            // line 96
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 97
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_InjectedHostCannotChangePwd", ($context["invalidHost"] ?? $this->getContext($context, "invalidHost"))]), "html", null, true);
            echo "
                ";
            // line 98
            if ( !($context["isSuperUser"] ?? $this->getContext($context, "isSuperUser"))) {
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_EmailYourAdministrator", ($context["invalidHostMailLinkStart"] ?? $this->getContext($context, "invalidHostMailLinkStart")), "</a>"]);
            }
            // line 99
            echo "            </div>
        ";
        }
        // line 101
        echo "
        <div piwik-save-button onconfirm=\"personalSettings.save()\"
             saving=\"personalSettings.loading\"></div>

        <div class=\"modal\" id=\"confirmChangesWithPassword\">
            <div class=\"modal-content\">
                <h2>";
        // line 107
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ConfirmWithPassword"]), "html", null, true);
        echo "</h2>

                <div piwik-field uicontrol=\"password\" name=\"currentPassword\" autocomplete=\"off\"
                     ng-model=\"personalSettings.passwordCurrent\"
                     full-width=\"true\"
                     data-title=\"";
        // line 112
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_YourCurrentPassword"]), "html_attr");
        echo "\"
                     value=\"\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"javascript:void(0)\" class=\"modal-action btn\" ng-click=\"personalSettings.save()\">";
        // line 117
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Ok"]), "html", null, true);
        echo "</a>
                <a href=\"javascript:void(0)\" class=\"modal-action modal-close modal-no\"  ng-click=\"personalSettings.cancelSave()\">";
        // line 118
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Cancel"]), "html", null, true);
        echo "</a>
            </div>
        </div>

    </form>
</div>

";
        // line 125
        if (($context["showNewsletterSignup"] ?? $this->getContext($context, "showNewsletterSignup"))) {
            // line 126
            echo "<div ng-controller=\"PersonalSettingsController as personalSettings\">
    <div piwik-content-block id=\"newsletterSignup\"
         ng-show=\"personalSettings.showNewsletterSignup\"
         content-title=\"";
            // line 129
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_NewsletterSignupTitle"]), "html_attr");
            echo "\">

        <div piwik-field uicontrol=\"checkbox\" name=\"newsletterSignupCheckbox\"
             ng-model=\"personalSettings.newsletterSignupCheckbox\"
             full-width=\"true\"
             data-title=\"";
            // line 134
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_NewsletterSignupMessage", "<a href=\"https://matomo.org/privacy-policy/\" target=\"_blank\">", "</a>"]), "html_attr");
            echo "\"
             >
        </div>

        <div piwik-save-button id=\"newsletterSignupBtn\"
             onconfirm=\"personalSettings.signupForNewsletter()\"
             data-disabled=\"!personalSettings.newsletterSignupCheckbox\"
             value=\"";
            // line 141
            echo "{{ personalSettings.newsletterSignupButtonTitle }}";
            echo "\"
             saving=\"personalSettings.isProcessingNewsletterSignup\">
        </div>
    </div>
</div>
";
        }
        // line 147
        echo "
<div piwik-content-block
     content-title=\"";
        // line 149
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokenAuth"]), "html_attr");
        echo "\">
    <pre piwik-select-on-focus id=\"token_auth_user\" piwik-show-sensitive-data=\"";
        // line 150
        echo \Piwik\piwik_escape_filter($this->env, ($context["userTokenAuth"] ?? $this->getContext($context, "userTokenAuth")), "html", null, true);
        echo "\"></pre>

    <button class=\"btn btn-link\"
            ng-controller=\"PersonalSettingsController as personalSettings\"
            ng-click=\"personalSettings.regenerateTokenAuth()\">";
        // line 154
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_TokenRegenerateTitle"]), "html", null, true);
        echo "</button>
</div>

";
        // line 157
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.userSettings.afterTokenAuth"]);
        echo "

<div piwik-plugin-settings mode=\"user\"></div>

<div piwik-content-block
     content-title=\"";
        // line 162
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ExcludeVisitsViaCookie"]), "html_attr");
        echo "\">
    <p>
        ";
        // line 164
        if (($context["ignoreCookieSet"] ?? $this->getContext($context, "ignoreCookieSet"))) {
            // line 165
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_YourVisitsAreIgnoredOnDomain", "<strong>", ($context["piwikHost"] ?? $this->getContext($context, "piwikHost")), "</strong>"]);
            echo "
        ";
        } else {
            // line 167
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_YourVisitsAreNotIgnored", "<strong>", "</strong>"]);
            echo "
        ";
        }
        // line 169
        echo "    </p>
    <span style=\"margin-left:20px;\">
    <a href='";
        // line 171
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["ignoreSalt" => ($context["ignoreSalt"] ?? $this->getContext($context, "ignoreSalt")), "module" => "UsersManager", "action" => "setIgnoreCookie"]]), "html", null, true);
        echo "#excludeCookie'>&rsaquo; ";
        if (($context["ignoreCookieSet"] ?? $this->getContext($context, "ignoreCookieSet"))) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ClickHereToDeleteTheCookie"]), "html", null, true);
            echo "
        ";
        } else {
            // line 172
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UsersManager_ClickHereToSetTheCookieOnDomain", ($context["piwikHost"] ?? $this->getContext($context, "piwikHost"))]), "html", null, true);
        }
        // line 173
        echo "        <br/>
    </a></span>
</div>

";
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 173,  384 => 172,  376 => 171,  372 => 169,  366 => 167,  360 => 165,  358 => 164,  353 => 162,  345 => 157,  339 => 154,  332 => 150,  328 => 149,  324 => 147,  315 => 141,  305 => 134,  297 => 129,  292 => 126,  290 => 125,  280 => 118,  276 => 117,  268 => 112,  260 => 107,  252 => 101,  248 => 99,  244 => 98,  240 => 97,  237 => 96,  235 => 95,  232 => 94,  226 => 91,  222 => 90,  213 => 84,  209 => 83,  205 => 82,  199 => 78,  197 => 77,  189 => 74,  185 => 73,  173 => 64,  169 => 63,  157 => 56,  153 => 55,  149 => 54,  139 => 49,  135 => 48,  127 => 43,  122 => 41,  118 => 40,  110 => 35,  105 => 32,  99 => 29,  95 => 28,  89 => 24,  87 => 23,  81 => 20,  76 => 18,  72 => 17,  65 => 13,  59 => 10,  55 => 9,  51 => 8,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
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

{% set title %}{{ 'UsersManager_PersonalSettings'|translate }}{% endset %}

{% block content %}

<div class=\"ui-confirm\" id=\"confirmTokenRegenerate\">
    <h2>{{ 'UsersManager_TokenRegenerateConfirmSelf'|translate }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

<div piwik-content-block content-title=\"{{ title|e('html_attr') }}\" feature=\"true\">
    <form id=\"userSettingsTable\" piwik-form ng-controller=\"PersonalSettingsController as personalSettings\">

        <div piwik-field uicontrol=\"text\" name=\"username\"
             data-title=\"{{ 'General_Username'|translate|e('html_attr') }}\"
             value=\"{{ userLogin }}\" data-disabled=\"true\"
             ng-model=\"personalSettings.username\"
             inline-help=\"{{ 'UsersManager_YourUsernameCannotBeChanged'|translate|e('html_attr') }}\">
        </div>

        {% if isUsersAdminEnabled %}
        <div piwik-field uicontrol=\"text\" name=\"email\"
             ng-model=\"personalSettings.email\"
             ng-change=\"personalSettings.requirePasswordConfirmation()\"
             maxlength=\"100\"
             data-title=\"{{ 'UsersManager_Email'|translate|e('html_attr') }}\"
             value=\"{{ userEmail }}\">
        </div>
        {% endif %}

        <div id=\"languageHelp\" class=\"inline-help-node\">
            <a target=\"_blank\" rel=\"noreferrer noopener\" href=\"https://matomo.org/translations/\">
                {{ 'LanguagesManager_AboutPiwikTranslations'|translate }}</a>
        </div>

        <div piwik-field uicontrol=\"select\" name=\"language\"
             ng-model=\"personalSettings.language\"
             data-title=\"{{ 'General_Language'|translate|e('html_attr') }}\"
             options=\"{{ languageOptions|json_encode }}\"
             inline-help=\"#languageHelp\"
             value=\"{{ currentLanguageCode }}\">
        </div>

        <div piwik-field uicontrol=\"select\" name=\"timeformat\"
             ng-model=\"personalSettings.timeformat\"
             data-title=\"{{ 'General_TimeFormat'|translate|e('html_attr') }}\"
             value=\"{{ currentTimeformat }}\" options=\"{{ timeFormats|json_encode }}\">
        </div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultReport\"
             ng-model=\"personalSettings.defaultReport\"
             introduction=\"{{ 'UsersManager_ReportToLoadByDefault'|translate|e('html_attr') }}\"
             data-title=\"{{ 'General_AllWebsitesDashboard'|translate|e('html_attr') }}\"
             value=\"{{ defaultReport }}\" options=\"{{ defaultReportOptions|json_encode }}\">
        </div>

        <div piwik-siteselector
             ng-model=\"personalSettings.site\"
             show-selected-site=\"true\"
             class=\"sites_autocomplete\"
             siteid=\"{{ defaultReportIdSite }}\"
             sitename=\"{{ defaultReportSiteName|rawSafeDecoded }}\"
             switch-site-on-select=\"false\"
             show-all-sites-item=\"false\"
             showselectedsite=\"true\"
             id=\"defaultReportSiteSelector\"
        ></div>

        <div piwik-field uicontrol=\"radio\" name=\"defaultDate\"
             ng-model=\"personalSettings.defaultDate\"
             introduction=\"{{ 'UsersManager_ReportDateToLoadByDefault'|translate|e('html_attr') }}\"
             value=\"{{ defaultDate }}\" options=\"{{ availableDefaultDates|json_encode }}\">
        </div>

        {% if isValidHost is defined and isValidHost and isUsersAdminEnabled %}

            <div piwik-field uicontrol=\"password\" name=\"password\" autocomplete=\"off\"
                 ng-model=\"personalSettings.password\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 introduction=\"{{ 'General_ChangePassword'|translate|e('html_attr') }}\"
                 data-title=\"{{ 'Login_NewPassword'|translate|e('html_attr') }}\"
                 value=\"\" inline-help=\"{{ 'UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne'|translate|e('html_attr') }}\">
            </div>

            <div piwik-field uicontrol=\"password\" name=\"passwordBis\" autocomplete=\"off\"
                 ng-model=\"personalSettings.passwordBis\"
                 ng-change=\"personalSettings.requirePasswordConfirmation()\"
                 data-title=\"{{ 'Login_NewPasswordRepeat'|translate|e('html_attr') }}\"
                 value=\"\" inline-help=\"{{ 'UsersManager_TypeYourPasswordAgain'|translate|e('html_attr') }}\">
            </div>
        {% endif %}

        {% if isValidHost is not defined or not isValidHost %}
            <div class=\"alert alert-danger\">
                {{ 'UsersManager_InjectedHostCannotChangePwd'|translate(invalidHost) }}
                {% if not isSuperUser %}{{ 'UsersManager_EmailYourAdministrator'|translate(invalidHostMailLinkStart,'</a>')|raw }}{% endif %}
            </div>
        {% endif %}

        <div piwik-save-button onconfirm=\"personalSettings.save()\"
             saving=\"personalSettings.loading\"></div>

        <div class=\"modal\" id=\"confirmChangesWithPassword\">
            <div class=\"modal-content\">
                <h2>{{ 'UsersManager_ConfirmWithPassword'|translate }}</h2>

                <div piwik-field uicontrol=\"password\" name=\"currentPassword\" autocomplete=\"off\"
                     ng-model=\"personalSettings.passwordCurrent\"
                     full-width=\"true\"
                     data-title=\"{{ 'UsersManager_YourCurrentPassword'|translate|e('html_attr') }}\"
                     value=\"\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <a href=\"javascript:void(0)\" class=\"modal-action btn\" ng-click=\"personalSettings.save()\">{{ 'General_Ok'|translate }}</a>
                <a href=\"javascript:void(0)\" class=\"modal-action modal-close modal-no\"  ng-click=\"personalSettings.cancelSave()\">{{ 'General_Cancel'|translate }}</a>
            </div>
        </div>

    </form>
</div>

{% if showNewsletterSignup %}
<div ng-controller=\"PersonalSettingsController as personalSettings\">
    <div piwik-content-block id=\"newsletterSignup\"
         ng-show=\"personalSettings.showNewsletterSignup\"
         content-title=\"{{ 'UsersManager_NewsletterSignupTitle'|translate|e('html_attr') }}\">

        <div piwik-field uicontrol=\"checkbox\" name=\"newsletterSignupCheckbox\"
             ng-model=\"personalSettings.newsletterSignupCheckbox\"
             full-width=\"true\"
             data-title=\"{{ 'UsersManager_NewsletterSignupMessage'|translate('<a href=\"https://matomo.org/privacy-policy/\" target=\"_blank\">', '</a>')|e('html_attr') }}\"
             >
        </div>

        <div piwik-save-button id=\"newsletterSignupBtn\"
             onconfirm=\"personalSettings.signupForNewsletter()\"
             data-disabled=\"!personalSettings.newsletterSignupCheckbox\"
             value=\"{{ '{{ personalSettings.newsletterSignupButtonTitle }}'|raw }}\"
             saving=\"personalSettings.isProcessingNewsletterSignup\">
        </div>
    </div>
</div>
{% endif %}

<div piwik-content-block
     content-title=\"{{ 'UsersManager_TokenAuth'|translate|e('html_attr') }}\">
    <pre piwik-select-on-focus id=\"token_auth_user\" piwik-show-sensitive-data=\"{{ userTokenAuth }}\"></pre>

    <button class=\"btn btn-link\"
            ng-controller=\"PersonalSettingsController as personalSettings\"
            ng-click=\"personalSettings.regenerateTokenAuth()\">{{ 'UsersManager_TokenRegenerateTitle'|translate }}</button>
</div>

{{ postEvent('Template.userSettings.afterTokenAuth') }}

<div piwik-plugin-settings mode=\"user\"></div>

<div piwik-content-block
     content-title=\"{{ 'UsersManager_ExcludeVisitsViaCookie'|translate|e('html_attr') }}\">
    <p>
        {% if ignoreCookieSet %}
            {{ 'UsersManager_YourVisitsAreIgnoredOnDomain'|translate(\"<strong>\", piwikHost, \"</strong>\")|raw }}
        {% else %}
            {{ 'UsersManager_YourVisitsAreNotIgnored'|translate(\"<strong>\",\"</strong>\")|raw }}
        {% endif %}
    </p>
    <span style=\"margin-left:20px;\">
    <a href='{{ linkTo({'ignoreSalt':ignoreSalt, 'module': 'UsersManager', 'action':'setIgnoreCookie'}) }}#excludeCookie'>&rsaquo; {% if ignoreCookieSet %}{{ 'UsersManager_ClickHereToDeleteTheCookie'|translate }}
        {% else %}{{'UsersManager_ClickHereToSetTheCookieOnDomain'|translate(piwikHost) }}{% endif %}
        <br/>
    </a></span>
</div>

{% endblock %}
", "@UsersManager/userSettings.twig", "/home/vagrant/code/matomo-demo/plugins/UsersManager/templates/userSettings.twig");
    }
}
