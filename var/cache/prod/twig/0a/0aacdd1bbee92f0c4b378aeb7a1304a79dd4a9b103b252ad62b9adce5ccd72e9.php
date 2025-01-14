<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig */
class __TwigTemplate_715db24b0e4e522379834eb9408e1ae3e363ef6798aea00f10864d27cf42eafe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
    <div class=\"modal-dialog\">
        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title module-modal-title\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload a module", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</h4>
                <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 34
        if (((isset($context["level"]) ? $context["level"] : null) <= twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 35
            echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"alert alert-danger\" role=\"alert\">
                                <p class=\"alert-text\">
                                    ";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["errorMessage"]) ? $context["errorMessage"] : null), "html", null, true);
            echo "
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 45
            echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
                                <div class=\"module-import-start\">
                                    <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
                                    <p class=module-import-start-main-text>
                                        ";
            // line 51
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Drop your module archive here or [1]select file[/1]", array(), "Admin.Modules.Feature"), array("[1]" => "<a href=\"#\" class=\"module-import-start-select-manual\">", "[/1]" => "</a>"));
            echo "
                                    </p>
                                    <p class=module-import-start-footer-text>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).", array(), "Admin.Modules.Help"), "html", null, true);
            echo "
                                        ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your module will be installed right after that.", array(), "Admin.Modules.Help"), "html", null, true);
            echo "
                                    </p>
                                </div>
                                <div class='module-import-processing'>
                                    <!-- Loader -->
                                    <div class=\"spinner\"></div>
                                    <p class=module-import-processing-main-text>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installing module...", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
                                    <p class=module-import-processing-footer-text>
                                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("It will close as soon as the module is installed. It won't be long!", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "
                                    </p>
                                </div>
                                <div class='module-import-success'>
                                    <i class=\"module-import-success-icon material-icons\">done</i><br/>
                                    <p class='module-import-success-msg'>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Module installed!", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
                                    <p class=\"module-import-success-details\"></p>
                                    <a class=\"module-import-success-configure btn btn-primary-reverse btn-outline-primary light-button\" href='#'>";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configure", array(), "Admin.Actions"), "html", null, true);
            echo "</a>
                                </div>
                                <div class='module-import-failure'>
                                    <i class=\"module-import-failure-icon material-icons\">error</i><br/>
                                    <p class='module-import-failure-msg'>";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Oops... Upload failed.", array(), "Admin.Modules.Notification"), "html", null, true);
            echo "</p>
                                    <a href=\"#\" class=\"module-import-failure-details-action\">";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("What happened?", array(), "Admin.Modules.Help"), "html", null, true);
            echo "</a>
                                    <div class='module-import-failure-details'></div>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href='#'>";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Try again", array(), "Admin.Actions"), "html", null, true);
            echo "</a>
                                </div>
                                <div class='module-import-confirm'>
                                </div>
                            </form>
                        </div>
                    </div>
                ";
        }
        // line 85
        echo "            </div>
            <div class=\"modal-footer\">
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 85,  111 => 77,  106 => 75,  102 => 74,  95 => 70,  90 => 68,  82 => 63,  77 => 61,  68 => 55,  64 => 54,  58 => 51,  50 => 45,  41 => 39,  35 => 35,  33 => 34,  26 => 30,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "/home/www/clients/client1/web339/web/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_import.html.twig");
    }
}
