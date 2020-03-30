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

/* @CoreAdminHome/generalSettings.twig */
class __TwigTemplate_e600168e779d7b4c86c9811542e396095c241f9e3d266eab7c7e6c892e99f8e9 extends \Twig\Template
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
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_MenuGeneralSettings"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@CoreAdminHome/generalSettings.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
    ";
        // line 7
        $context["piwik"] = $this->loadTemplate("macros.twig", "@CoreAdminHome/generalSettings.twig", 7)->unwrap();
        // line 8
        echo "    ";
        $context["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@CoreAdminHome/generalSettings.twig", 8)->unwrap();
        // line 9
        echo "
    ";
        // line 10
        echo $context["ajax"]->geterrorDiv();
        echo "
    ";
        // line 11
        echo $context["ajax"]->getloadingDiv();
        echo "

";
        // line 13
        if (($context["isGeneralSettingsAdminEnabled"] ?? $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
            // line 14
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_ArchivingSettings"]), "html_attr");
            echo "\">
        <div ng-controller=\"ArchivingController as archivingSettings\">
            <div class=\"form-group row\">
                <h3 class=\"col s12\">";
            // line 17
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AllowPiwikArchivingToTriggerBrowser"]), "html", null, true);
            echo "</h3>
                <div class=\"col s12 m6\">
                    <p>
                        <input type=\"radio\" value=\"1\" id=\"enableBrowserTriggerArchiving1\"
                               name=\"enableBrowserTriggerArchiving\" ";
            // line 21
            if ((($context["enableBrowserTriggerArchiving"] ?? $this->getContext($context, "enableBrowserTriggerArchiving")) == 1)) {
                echo " checked=\"checked\"";
            }
            // line 22
            echo "                        />
                        <label for=\"enableBrowserTriggerArchiving1\">
                            ";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
            echo "
                            <span class=\"form-description\">";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Default"]), "html", null, true);
            echo "</span>
                        </label>
                    </p>

                    <p>
                    <input type=\"radio\" value=\"0\"
                           id=\"enableBrowserTriggerArchiving2\"
                           name=\"enableBrowserTriggerArchiving\"
                            ";
            // line 33
            if ((($context["enableBrowserTriggerArchiving"] ?? $this->getContext($context, "enableBrowserTriggerArchiving")) == 0)) {
                echo " checked=\"checked\"";
            }
            echo " />

                    <label for=\"enableBrowserTriggerArchiving2\">
                        ";
            // line 36
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
            echo "
                        <span class=\"form-description\">";
            // line 37
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ArchivingTriggerDescription", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/setup-auto-archiving/'>", "</a>"]);
            echo "</span>
                    </label>
                    </p>
                </div><div class=\"col s12 m6\">
                    <div class=\"form-help\">
                        ";
            // line 42
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ArchivingInlineHelp"]), "html", null, true);
            echo "
                        <br/>
                        ";
            // line 44
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SeeTheOfficialDocumentationForMoreInformation", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/setup-auto-archiving/'>", "</a>"]);
            echo "
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <h3 class=\"col s12\">
                    ";
            // line 51
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ReportsContainingTodayWillBeProcessedAtMostEvery"]), "html", null, true);
            echo "
                </h3>
                <div class=\"input-field col s12 m6\">
                    <input  type=\"text\" value='";
            // line 54
            echo \Piwik\piwik_escape_filter($this->env, ($context["todayArchiveTimeToLive"] ?? $this->getContext($context, "todayArchiveTimeToLive")), "html_attr");
            echo "' id='todayArchiveTimeToLive' ";
            if ( !($context["isGeneralSettingsAdminEnabled"] ?? $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
                echo "disabled=\"disabled\"";
            }
            echo " />
                    <span class=\"form-description\">
                        ";
            // line 56
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_RearchiveTimeIntervalOnlyForTodayReports"]), "html", null, true);
            echo "
                    </span>
                </div>
                <div class=\"col s12 m6\">
                    ";
            // line 60
            if (($context["isGeneralSettingsAdminEnabled"] ?? $this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
                // line 61
                echo "                        <div class=\"form-help\">
                            ";
                // line 62
                if (($context["showWarningCron"] ?? $this->getContext($context, "showWarningCron"))) {
                    // line 63
                    echo "                                <strong>
                                    ";
                    // line 64
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NewReportsWillBeProcessedByCron"]), "html", null, true);
                    echo "<br/>
                                    ";
                    // line 65
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ReportsWillBeProcessedAtMostEveryHour"]), "html", null, true);
                    echo "
                                    ";
                    // line 66
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_IfArchivingIsFastYouCanSetupCronRunMoreOften"]), "html", null, true);
                    echo "<br/>
                                </strong>
                            ";
                }
                // line 69
                echo "                            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmallTrafficYouCanLeaveDefault", ($context["todayArchiveTimeToLiveDefault"] ?? $this->getContext($context, "todayArchiveTimeToLiveDefault"))]), "html", null, true);
                echo "
                            <br/>
                            ";
                // line 71
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_MediumToHighTrafficItIsRecommendedTo", 1800, 3600]), "html", null, true);
                echo "
                        </div>
                    ";
            }
            // line 74
            echo "                </div>
            </div>

            <div onconfirm=\"archivingSettings.save()\" saving=\"archivingSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
    <div piwik-content-block content-title=\"";
            // line 80
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_EmailServerSettings"]), "html_attr");
            echo "\">

        <div piwik-form ng-controller=\"MailSmtpController as mailSettings\">
            <div piwik-field uicontrol=\"checkbox\" name=\"mailUseSmtp\"
                 ng-model=\"mailSettings.enabled\"
                 data-title=\"";
            // line 85
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_UseSMTPServerForEmail"]), "html_attr");
            echo "\"
                 value=\"";
            // line 86
            if (($this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "transport", []) == "smtp")) {
                echo "1";
            }
            echo "\"
                 inline-help=\"";
            // line 87
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SelectYesIfYouWantToSendEmailsViaServer"]), "html_attr");
            echo "\">
            </div>

            <div id=\"smtpSettings\"
                 ng-show=\"mailSettings.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"mailHost\"
                     ng-model=\"mailSettings.mailHost\"
                     data-title=\"";
            // line 95
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpServerAddress"]), "html_attr");
            echo "\"
                     value=\"";
            // line 96
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "host", []), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailPort\"
                     ng-model=\"mailSettings.mailPort\"
                     data-title=\"";
            // line 101
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpPort"]), "html_attr");
            echo "\"
                     value=\"";
            // line 102
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "port", []), "html_attr");
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OptionalSmtpPort"]), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailType\"
                     ng-model=\"mailSettings.mailType\"
                     data-title=\"";
            // line 107
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AuthenticationMethodSmtp"]), "html_attr");
            echo "\"
                     options=\"";
            // line 108
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["mailTypes"] ?? $this->getContext($context, "mailTypes"))), "html", null, true);
            echo "\"
                     value=\"";
            // line 109
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "type", []), "html_attr");
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OnlyUsedIfUserPwdIsSet"]), "html_attr");
            echo "\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailUsername\"
                     ng-model=\"mailSettings.mailUsername\"
                     data-title=\"";
            // line 114
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpUsername"]), "html_attr");
            echo "\"
                     value=\"";
            // line 115
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "username", []), "html_attr");
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OnlyEnterIfRequired"]), "html_attr");
            echo "\"
                     autocomplete=\"off\">
                </div>

                ";
            // line 119
            ob_start();
            // line 120
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OnlyEnterIfRequiredPassword"]), "html", null, true);
            echo "<br/>
                    ";
            // line 121
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_WarningPasswordStored", "<strong>", "</strong>"]);
            $context["help"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 123
            echo "
                <div piwik-field uicontrol=\"password\" name=\"mailPassword\"
                     ng-model=\"mailSettings.mailPassword\"
                     ng-change=\"mailSettings.passwordChanged = true\"
                     data-title=\"";
            // line 127
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpPassword"]), "html_attr");
            echo "\"
                     value=\"";
            // line 128
            echo (($this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "password", [])) ? ("******") : (""));
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html_attr");
            echo "\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailFromAddress\"
                     ng-model=\"mailSettings.mailFromAddress\"
                     title=\"";
            // line 134
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpFromAddress"]), "html_attr");
            echo "\"
                     value=\"";
            // line 135
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "noreply_email_address", []), "html_attr");
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpFromEmailHelp", ($context["mailHost"] ?? $this->getContext($context, "mailHost"))]), "html_attr");
            echo "\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailFromName\"
                     ng-model=\"mailSettings.mailFromName\"
                     title=\"";
            // line 141
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpFromName"]), "html_attr");
            echo "\"
                     value=\"";
            // line 142
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "noreply_email_name", []), "html_attr");
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NameShownInTheSenderColumn"]), "html_attr");
            echo "\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailEncryption\"
                     ng-model=\"mailSettings.mailEncryption\"
                     data-title=\"";
            // line 148
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_SmtpEncryption"]), "html_attr");
            echo "\"
                     options=\"";
            // line 149
            echo \Piwik\piwik_escape_filter($this->env, twig_jsonencode_filter(($context["mailEncryptions"] ?? $this->getContext($context, "mailEncryptions"))), "html", null, true);
            echo "\"
                     value=\"";
            // line 150
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["mail"] ?? $this->getContext($context, "mail")), "encryption", []), "html_attr");
            echo "\" inline-help=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_EncryptedSmtpTransport"]), "html_attr");
            echo "\">
                </div>
            </div>

            <div onconfirm=\"mailSettings.save()\" saving=\"mailSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
";
        }
        // line 158
        echo "
";
        // line 159
        if (($context["customLogoEnabled"] ?? $this->getContext($context, "customLogoEnabled"))) {
            // line 160
            echo "<div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_BrandingSettings"]), "html_attr");
            echo "\">

    <div piwik-form ng-controller=\"BrandingController as brandingSettings\">

        <p>";
            // line 164
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_CustomLogoHelpText"]), "html", null, true);
            echo "</p>

        ";
            // line 166
            ob_start();
            // line 167
            ob_start();
            echo "\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_GiveUsYourFeedback"]), "html", null, true);
            echo "\"";
            $context["giveUsFeedbackText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 168
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_CustomLogoFeedbackInfo", ($context["giveUsFeedbackText"] ?? $this->getContext($context, "giveUsFeedbackText")), "<a href='?module=CorePluginsAdmin&action=plugins' rel='noreferrer noopener' target='_blank'>", "</a>"]);
            $context["help"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 170
            echo "
        <div piwik-field uicontrol=\"checkbox\" name=\"useCustomLogo\"
             ng-model=\"brandingSettings.enabled\"
             ng-change=\"brandingSettings.toggleCustomLogo()\"
             data-title=\"";
            // line 174
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_UseCustomLogo"]), "html_attr");
            echo "\"
             value=\"";
            // line 175
            if (($this->getAttribute(($context["branding"] ?? $this->getContext($context, "branding")), "use_custom_logo", []) == 1)) {
                echo "1";
            }
            echo "\"
             ";
            // line 176
            if (($context["isPluginsAdminEnabled"] ?? $this->getContext($context, "isPluginsAdminEnabled"))) {
                echo "inline-help=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html_attr");
                echo "\"";
            }
            echo ">
        </div>

        <div id=\"logoSettings\" ng-show=\"brandingSettings.enabled\">
            <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
                ";
            // line 181
            if (($context["fileUploadEnabled"] ?? $this->getContext($context, "fileUploadEnabled"))) {
                // line 182
                echo "                    <input type=\"hidden\" name=\"token_auth\" value=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["token_auth"] ?? $this->getContext($context, "token_auth")), "html", null, true);
                echo "\"/>

                    ";
                // line 184
                if (($context["logosWriteable"] ?? $this->getContext($context, "logosWriteable"))) {
                    // line 185
                    echo "                        <div class=\"alert alert-warning uploaderror\" style=\"display:none;\">
                            ";
                    // line 186
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_LogoUploadFailed"]), "html", null, true);
                    echo "
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customLogo\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customLogo\"
                             data-title=\"";
                    // line 192
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_LogoUpload"]), "html_attr");
                    echo "\"
                             inline-help=\"";
                    // line 193
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 110]), "html_attr");
                    echo "\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"";
                    // line 198
                    echo \Piwik\piwik_escape_filter($this->env, ($context["pathUserLogo"] ?? $this->getContext($context, "pathUserLogo")), "html", null, true);
                    echo "\" data-src-exists=\"";
                    echo ((($context["hasUserLogo"] ?? $this->getContext($context, "hasUserLogo"))) ? ("1") : ("0"));
                    echo "\"
                                     id=\"currentLogo\" style=\"max-height: 150px\"/>
                            </div>
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customFavicon\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customFavicon\"
                             data-title=\"";
                    // line 206
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_FaviconUpload"]), "html_attr");
                    echo "\"
                             inline-help=\"";
                    // line 207
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 16]), "html_attr");
                    echo "\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"";
                    // line 212
                    echo \Piwik\piwik_escape_filter($this->env, ($context["pathUserFavicon"] ?? $this->getContext($context, "pathUserFavicon")), "html", null, true);
                    echo "\" data-src-exists=\"";
                    echo ((($context["hasUserFavicon"] ?? $this->getContext($context, "hasUserFavicon"))) ? ("1") : ("0"));
                    echo "\"
                                     id=\"currentFavicon\" width=\"16\" height=\"16\"/>
                            </div>
                        </div>

                    ";
                } else {
                    // line 218
                    echo "                        <div class=\"alert alert-warning\">
                            ";
                    // line 219
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_LogoNotWriteableInstruction", (("<code>" .                     // line 220
($context["pathUserLogoDirectory"] ?? $this->getContext($context, "pathUserLogoDirectory"))) . "</code><br/>"), (((((($context["pathUserLogo"] ?? $this->getContext($context, "pathUserLogo")) . ", ") . ($context["pathUserLogoSmall"] ?? $this->getContext($context, "pathUserLogoSmall"))) . ", ") . ($context["pathUserLogoSVG"] ?? $this->getContext($context, "pathUserLogoSVG"))) . "")]);
                    echo "
                        </div>
                    ";
                }
                // line 223
                echo "                ";
            } else {
                // line 224
                echo "                    <div class=\"alert alert-warning\">
                        ";
                // line 225
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreAdminHome_FileUploadDisabled", "file_uploads=1"]), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 228
            echo "            </form>
        </div>

        <div onconfirm=\"brandingSettings.save()\" saving=\"brandingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>
";
        }
        // line 235
        echo "
";
        // line 236
        if (($context["isDataPurgeSettingsEnabled"] ?? $this->getContext($context, "isDataPurgeSettingsEnabled"))) {
            // line 237
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteDataSettings"]), "html_attr");
            echo "\">
        <p>";
            // line 238
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteDataDescription"]), "html", null, true);
            echo "</p>
        <p>
            <a href='";
            // line 240
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "PrivacyManager", "action" => "privacySettings"]]), "html", null, true);
            echo "#deleteLogsAnchor'>
                ";
            // line 241
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_ClickHereSettings", (("'" . call_user_func_array($this->env->getFilter('translate')->getCallable(), ["PrivacyManager_DeleteDataSettings"])) . "'")]), "html", null, true);
            echo "
            </a>
        </p>
    </div>
";
        }
        // line 246
        echo "
<div piwik-plugin-settings mode=\"admin\"></div>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/generalSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 246,  552 => 241,  548 => 240,  543 => 238,  538 => 237,  536 => 236,  533 => 235,  524 => 228,  518 => 225,  515 => 224,  512 => 223,  506 => 220,  505 => 219,  502 => 218,  491 => 212,  483 => 207,  479 => 206,  466 => 198,  458 => 193,  454 => 192,  445 => 186,  442 => 185,  440 => 184,  434 => 182,  432 => 181,  420 => 176,  414 => 175,  410 => 174,  404 => 170,  400 => 168,  394 => 167,  392 => 166,  387 => 164,  379 => 160,  377 => 159,  374 => 158,  361 => 150,  357 => 149,  353 => 148,  342 => 142,  338 => 141,  327 => 135,  323 => 134,  312 => 128,  308 => 127,  302 => 123,  299 => 121,  295 => 120,  293 => 119,  284 => 115,  280 => 114,  270 => 109,  266 => 108,  262 => 107,  252 => 102,  248 => 101,  240 => 96,  236 => 95,  225 => 87,  219 => 86,  215 => 85,  207 => 80,  199 => 74,  193 => 71,  187 => 69,  181 => 66,  177 => 65,  173 => 64,  170 => 63,  168 => 62,  165 => 61,  163 => 60,  156 => 56,  147 => 54,  141 => 51,  131 => 44,  126 => 42,  118 => 37,  114 => 36,  106 => 33,  95 => 25,  91 => 24,  87 => 22,  83 => 21,  76 => 17,  69 => 14,  67 => 13,  62 => 11,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  44 => 5,  39 => 1,  35 => 3,  29 => 1,);
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

{% set title %}{{ 'CoreAdminHome_MenuGeneralSettings'|translate }}{% endset %}

{% block content %}

    {% import 'macros.twig' as piwik %}
    {% import 'ajaxMacros.twig' as ajax %}

    {{ ajax.errorDiv() }}
    {{ ajax.loadingDiv() }}

{% if isGeneralSettingsAdminEnabled %}
    <div piwik-content-block content-title=\"{{ 'CoreAdminHome_ArchivingSettings'|translate|e('html_attr') }}\">
        <div ng-controller=\"ArchivingController as archivingSettings\">
            <div class=\"form-group row\">
                <h3 class=\"col s12\">{{ 'General_AllowPiwikArchivingToTriggerBrowser'|translate }}</h3>
                <div class=\"col s12 m6\">
                    <p>
                        <input type=\"radio\" value=\"1\" id=\"enableBrowserTriggerArchiving1\"
                               name=\"enableBrowserTriggerArchiving\" {% if enableBrowserTriggerArchiving==1 %} checked=\"checked\"{% endif %}
                        />
                        <label for=\"enableBrowserTriggerArchiving1\">
                            {{ 'General_Yes'|translate }}
                            <span class=\"form-description\">{{ 'General_Default'|translate }}</span>
                        </label>
                    </p>

                    <p>
                    <input type=\"radio\" value=\"0\"
                           id=\"enableBrowserTriggerArchiving2\"
                           name=\"enableBrowserTriggerArchiving\"
                            {% if enableBrowserTriggerArchiving==0 %} checked=\"checked\"{% endif %} />

                    <label for=\"enableBrowserTriggerArchiving2\">
                        {{ 'General_No'|translate }}
                        <span class=\"form-description\">{{ 'General_ArchivingTriggerDescription'|translate(\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/setup-auto-archiving/'>\",\"</a>\")|raw }}</span>
                    </label>
                    </p>
                </div><div class=\"col s12 m6\">
                    <div class=\"form-help\">
                        {{ 'General_ArchivingInlineHelp'|translate }}
                        <br/>
                        {{ 'General_SeeTheOfficialDocumentationForMoreInformation'|translate(\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/setup-auto-archiving/'>\",\"</a>\")|raw }}
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <h3 class=\"col s12\">
                    {{ 'General_ReportsContainingTodayWillBeProcessedAtMostEvery'|translate }}
                </h3>
                <div class=\"input-field col s12 m6\">
                    <input  type=\"text\" value='{{ todayArchiveTimeToLive|e('html_attr') }}' id='todayArchiveTimeToLive' {% if not isGeneralSettingsAdminEnabled %}disabled=\"disabled\"{% endif %} />
                    <span class=\"form-description\">
                        {{ 'General_RearchiveTimeIntervalOnlyForTodayReports'|translate }}
                    </span>
                </div>
                <div class=\"col s12 m6\">
                    {% if isGeneralSettingsAdminEnabled %}
                        <div class=\"form-help\">
                            {% if showWarningCron %}
                                <strong>
                                    {{ 'General_NewReportsWillBeProcessedByCron'|translate }}<br/>
                                    {{ 'General_ReportsWillBeProcessedAtMostEveryHour'|translate }}
                                    {{ 'General_IfArchivingIsFastYouCanSetupCronRunMoreOften'|translate }}<br/>
                                </strong>
                            {% endif %}
                            {{ 'General_SmallTrafficYouCanLeaveDefault'|translate( todayArchiveTimeToLiveDefault ) }}
                            <br/>
                            {{ 'General_MediumToHighTrafficItIsRecommendedTo'|translate(1800,3600) }}
                        </div>
                    {% endif %}
                </div>
            </div>

            <div onconfirm=\"archivingSettings.save()\" saving=\"archivingSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
    <div piwik-content-block content-title=\"{{ 'CoreAdminHome_EmailServerSettings'|translate|e('html_attr') }}\">

        <div piwik-form ng-controller=\"MailSmtpController as mailSettings\">
            <div piwik-field uicontrol=\"checkbox\" name=\"mailUseSmtp\"
                 ng-model=\"mailSettings.enabled\"
                 data-title=\"{{ 'General_UseSMTPServerForEmail'|translate|e('html_attr') }}\"
                 value=\"{% if mail.transport == 'smtp' %}1{% endif %}\"
                 inline-help=\"{{ 'General_SelectYesIfYouWantToSendEmailsViaServer'|translate|e('html_attr') }}\">
            </div>

            <div id=\"smtpSettings\"
                 ng-show=\"mailSettings.enabled\">

                <div piwik-field uicontrol=\"text\" name=\"mailHost\"
                     ng-model=\"mailSettings.mailHost\"
                     data-title=\"{{ 'General_SmtpServerAddress'|translate|e('html_attr') }}\"
                     value=\"{{ mail.host|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailPort\"
                     ng-model=\"mailSettings.mailPort\"
                     data-title=\"{{ 'General_SmtpPort'|translate|e('html_attr') }}\"
                     value=\"{{ mail.port|e('html_attr') }}\" inline-help=\"{{ 'General_OptionalSmtpPort'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailType\"
                     ng-model=\"mailSettings.mailType\"
                     data-title=\"{{ 'General_AuthenticationMethodSmtp'|translate|e('html_attr') }}\"
                     options=\"{{ mailTypes|json_encode }}\"
                     value=\"{{ mail.type|e('html_attr') }}\" inline-help=\"{{ 'General_OnlyUsedIfUserPwdIsSet'|translate|e('html_attr') }}\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailUsername\"
                     ng-model=\"mailSettings.mailUsername\"
                     data-title=\"{{ 'General_SmtpUsername'|translate|e('html_attr') }}\"
                     value=\"{{ mail.username|e('html_attr') }}\" inline-help=\"{{ 'General_OnlyEnterIfRequired'|translate|e('html_attr') }}\"
                     autocomplete=\"off\">
                </div>

                {% set help -%}
                    {{ 'General_OnlyEnterIfRequiredPassword'|translate }}<br/>
                    {{ 'General_WarningPasswordStored'|translate(\"<strong>\",\"</strong>\")|raw }}
                {%- endset %}

                <div piwik-field uicontrol=\"password\" name=\"mailPassword\"
                     ng-model=\"mailSettings.mailPassword\"
                     ng-change=\"mailSettings.passwordChanged = true\"
                     data-title=\"{{ 'General_SmtpPassword'|translate|e('html_attr') }}\"
                     value=\"{{ mail.password ? '******' }}\" inline-help=\"{{ help|e('html_attr') }}\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailFromAddress\"
                     ng-model=\"mailSettings.mailFromAddress\"
                     title=\"{{ 'General_SmtpFromAddress'|translate|e('html_attr') }}\"
                     value=\"{{ mail.noreply_email_address|e('html_attr') }}\" inline-help=\"{{ 'General_SmtpFromEmailHelp'|translate(mailHost)|e('html_attr') }}\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"text\" name=\"mailFromName\"
                     ng-model=\"mailSettings.mailFromName\"
                     title=\"{{ 'General_SmtpFromName'|translate|e('html_attr') }}\"
                     value=\"{{ mail.noreply_email_name|e('html_attr') }}\" inline-help=\"{{ 'General_NameShownInTheSenderColumn'|translate|e('html_attr') }}\"
                     autocomplete=\"off\">
                </div>

                <div piwik-field uicontrol=\"select\" name=\"mailEncryption\"
                     ng-model=\"mailSettings.mailEncryption\"
                     data-title=\"{{ 'General_SmtpEncryption'|translate|e('html_attr') }}\"
                     options=\"{{ mailEncryptions|json_encode }}\"
                     value=\"{{ mail.encryption|e('html_attr') }}\" inline-help=\"{{ 'General_EncryptedSmtpTransport'|translate|e('html_attr') }}\">
                </div>
            </div>

            <div onconfirm=\"mailSettings.save()\" saving=\"mailSettings.isLoading\" piwik-save-button></div>
        </div>
    </div>
{% endif %}

{% if customLogoEnabled %}
<div piwik-content-block content-title=\"{{ 'CoreAdminHome_BrandingSettings'|translate|e('html_attr') }}\">

    <div piwik-form ng-controller=\"BrandingController as brandingSettings\">

        <p>{{ 'CoreAdminHome_CustomLogoHelpText'|translate }}</p>

        {% set help -%}
            {% set giveUsFeedbackText %}\"{{ 'General_GiveUsYourFeedback'|translate }}\"{% endset %}
            {{ 'CoreAdminHome_CustomLogoFeedbackInfo'|translate(giveUsFeedbackText,\"<a href='?module=CorePluginsAdmin&action=plugins' rel='noreferrer noopener' target='_blank'>\",\"</a>\")|raw }}
        {%- endset %}

        <div piwik-field uicontrol=\"checkbox\" name=\"useCustomLogo\"
             ng-model=\"brandingSettings.enabled\"
             ng-change=\"brandingSettings.toggleCustomLogo()\"
             data-title=\"{{ 'CoreAdminHome_UseCustomLogo'|translate|e('html_attr') }}\"
             value=\"{% if branding.use_custom_logo == 1 %}1{% endif %}\"
             {% if isPluginsAdminEnabled %}inline-help=\"{{ help|e('html_attr') }}\"{% endif %}>
        </div>

        <div id=\"logoSettings\" ng-show=\"brandingSettings.enabled\">
            <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
                {% if fileUploadEnabled %}
                    <input type=\"hidden\" name=\"token_auth\" value=\"{{ token_auth }}\"/>

                    {% if logosWriteable %}
                        <div class=\"alert alert-warning uploaderror\" style=\"display:none;\">
                            {{ 'CoreAdminHome_LogoUploadFailed'|translate }}
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customLogo\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customLogo\"
                             data-title=\"{{ 'CoreAdminHome_LogoUpload'|translate|e('html_attr') }}\"
                             inline-help=\"{{ 'CoreAdminHome_LogoUploadHelp'|translate(\"JPG / PNG / GIF\", 110)|e('html_attr') }}\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"{{ pathUserLogo }}\" data-src-exists=\"{{ hasUserLogo ? '1':'0' }}\"
                                     id=\"currentLogo\" style=\"max-height: 150px\"/>
                            </div>
                        </div>

                        <div piwik-field uicontrol=\"file\" name=\"customFavicon\"
                             ng-change=\"brandingSettings.updateLogo()\"
                             ng-model=\"brandingSettings.customFavicon\"
                             data-title=\"{{ 'CoreAdminHome_FaviconUpload'|translate|e('html_attr') }}\"
                             inline-help=\"{{ 'CoreAdminHome_LogoUploadHelp'|translate(\"JPG / PNG / GIF\", 16)|e('html_attr') }}\">
                        </div>

                        <div class=\"row\">
                            <div class=\"col s12\">
                                <img data-src=\"{{ pathUserFavicon }}\" data-src-exists=\"{{ hasUserFavicon ? '1':'0' }}\"
                                     id=\"currentFavicon\" width=\"16\" height=\"16\"/>
                            </div>
                        </div>

                    {% else %}
                        <div class=\"alert alert-warning\">
                            {{ 'CoreAdminHome_LogoNotWriteableInstruction'
                                |translate(\"<code>\"~pathUserLogoDirectory~\"</code><br/>\", pathUserLogo ~\", \"~ pathUserLogoSmall ~\", \"~ pathUserLogoSVG ~\"\")|raw }}
                        </div>
                    {% endif %}
                {% else %}
                    <div class=\"alert alert-warning\">
                        {{ 'CoreAdminHome_FileUploadDisabled'|translate(\"file_uploads=1\") }}
                    </div>
                {% endif %}
            </form>
        </div>

        <div onconfirm=\"brandingSettings.save()\" saving=\"brandingSettings.isLoading\" piwik-save-button></div>
    </div>
</div>
{% endif %}

{% if isDataPurgeSettingsEnabled %}
    <div piwik-content-block content-title=\"{{ 'PrivacyManager_DeleteDataSettings'|translate|e('html_attr') }}\">
        <p>{{ 'PrivacyManager_DeleteDataDescription'|translate }}</p>
        <p>
            <a href='{{ linkTo({'module':\"PrivacyManager\", 'action':\"privacySettings\"}) }}#deleteLogsAnchor'>
                {{ 'PrivacyManager_ClickHereSettings'|translate(\"'\" ~ 'PrivacyManager_DeleteDataSettings'|translate ~ \"'\") }}
            </a>
        </p>
    </div>
{% endif %}

<div piwik-plugin-settings mode=\"admin\"></div>

{% endblock %}
", "@CoreAdminHome/generalSettings.twig", "/home/vagrant/code/matomo-demo/plugins/CoreAdminHome/templates/generalSettings.twig");
    }
}
