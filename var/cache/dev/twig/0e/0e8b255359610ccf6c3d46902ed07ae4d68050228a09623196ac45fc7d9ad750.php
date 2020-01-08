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

/* home/menu.html.twig */
class __TwigTemplate_3873382e0042905d75d5f6dff9a43e83fbb60d6f05a9297c7c4d4ea70e5b1f36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/menu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <header>
        <nav class=\"navbar\" style=\"background: #4D0080; color: #fff;\">
            <h3 class=\"text-left\">DGT Creator Services</h3>
            <p class=\"text-right\">Digital Learning Content Manager</p>
        </nav>
    </header>
    <style>
        #sidebar {
            min-width: 270px;
            max-width: 270px;
            background: #fff;
            color: #000000;
        }

        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
        }

        #sidebar.active ul.components li a {
            padding: 10px 0;
        }

        #sidebar ul li a {
            padding: 10px 30px;
            display: block;
            color: black;
        }

        footer{
            position: absolute;
            bottom: 0;
            width: 100%;
        }

    </style>

    <script>
        function FermerMenu(){
            document.getElementById('DC1').style.left = '-90px';
            document.getElementById('DC2').style.left = '-90px';
            document.getElementById('DC3').style.left = '-90px';
            document.getElementById('DC4').style.left = '-90px';
            document.getElementById('DC5').style.left = '-90px';
        }

        function OuvrirMenu(){
            document.getElementById('DC1').style.left = '-0px';
            document.getElementById('DC2').style.left = '-0px';
            document.getElementById('DC3').style.left = '-0px';
            document.getElementById('DC4').style.left = '-0px';
            document.getElementById('DC5').style.left = '-0px';
        }
    </script>

    <main>
        <table width=\"100%\" height=\"100%\">
            <tr width=\"100%\" height=\"100%\">
                <td onmouseover=\"OuvrirMenu()\" width=\"0%\">
                    <!-- Menu latéral -->
                    <div class=\"wrapper d-flex align-items-stretch\">
                        <nav id=\"sidebar\" class=\"active\">
                            <ul class=\"list-unstyled components mb-5\">
                            <li class=\"active\">
                                <a href=\"#\"><img src=\"image/DC1.jpg\" id=\"DC1\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC2.jpg\" id=\"DC2\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC3.jpg\" id=\"DC3\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC4.jpg\" id=\"DC4\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC5.jpg\" id=\"DC5\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </td>
                <td width=\"100%\" class=\"text-center\" onmouseover=\"FermerMenu()\">
                    <!-- Contenu de la page -->
                    <div class=\"text-align center\">
                        <h1><strong>Bonjour Nicolas</strong></h1>
                        <h4><strong>Comment puis-je vous aider ?</strong></h4>
                    </div>
                </td>
            </tr>
        </table>
    </main>

    <!-- Footer -->
    <footer class=\"page-footer font-small\" style=\"background: #fff;\">
        <div class=\"footer-copyright py-3\">
        <table width=\"100%\">
            <tr width=\"100%\">
                <td width=\"5%\"></td>
                <td width=\"45%\" class=\"text-left\">
                    © 
                    <a href=\"#\"> Supercharged by DGT Concept </a>
                </td>
                <td width=\"45%\" class=\"text-right\">
                    © 
                    <a href=\"#\"> Powered By TALENSOFT </a>
                </td>
                <td width=\"5%\"></td>
            </tr>
        </table>
        </div>
    </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
    <header>
        <nav class=\"navbar\" style=\"background: #4D0080; color: #fff;\">
            <h3 class=\"text-left\">DGT Creator Services</h3>
            <p class=\"text-right\">Digital Learning Content Manager</p>
        </nav>
    </header>
    <style>
        #sidebar {
            min-width: 270px;
            max-width: 270px;
            background: #fff;
            color: #000000;
        }

        #sidebar.active {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
        }

        #sidebar.active ul.components li a {
            padding: 10px 0;
        }

        #sidebar ul li a {
            padding: 10px 30px;
            display: block;
            color: black;
        }

        footer{
            position: absolute;
            bottom: 0;
            width: 100%;
        }

    </style>

    <script>
        function FermerMenu(){
            document.getElementById('DC1').style.left = '-90px';
            document.getElementById('DC2').style.left = '-90px';
            document.getElementById('DC3').style.left = '-90px';
            document.getElementById('DC4').style.left = '-90px';
            document.getElementById('DC5').style.left = '-90px';
        }

        function OuvrirMenu(){
            document.getElementById('DC1').style.left = '-0px';
            document.getElementById('DC2').style.left = '-0px';
            document.getElementById('DC3').style.left = '-0px';
            document.getElementById('DC4').style.left = '-0px';
            document.getElementById('DC5').style.left = '-0px';
        }
    </script>

    <main>
        <table width=\"100%\" height=\"100%\">
            <tr width=\"100%\" height=\"100%\">
                <td onmouseover=\"OuvrirMenu()\" width=\"0%\">
                    <!-- Menu latéral -->
                    <div class=\"wrapper d-flex align-items-stretch\">
                        <nav id=\"sidebar\" class=\"active\">
                            <ul class=\"list-unstyled components mb-5\">
                            <li class=\"active\">
                                <a href=\"#\"><img src=\"image/DC1.jpg\" id=\"DC1\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC2.jpg\" id=\"DC2\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC3.jpg\" id=\"DC3\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC4.jpg\" id=\"DC4\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            <li>
                                <a href=\"#\"><img src=\"image/DC5.jpg\" id=\"DC5\" height=\"100px\" style=\"position: relative;\"/></a>
                            </li>
                            </ul>
                        </nav>
                    </div>
                </td>
                <td width=\"100%\" class=\"text-center\" onmouseover=\"FermerMenu()\">
                    <!-- Contenu de la page -->
                    <div class=\"text-align center\">
                        <h1><strong>Bonjour Nicolas</strong></h1>
                        <h4><strong>Comment puis-je vous aider ?</strong></h4>
                    </div>
                </td>
            </tr>
        </table>
    </main>

    <!-- Footer -->
    <footer class=\"page-footer font-small\" style=\"background: #fff;\">
        <div class=\"footer-copyright py-3\">
        <table width=\"100%\">
            <tr width=\"100%\">
                <td width=\"5%\"></td>
                <td width=\"45%\" class=\"text-left\">
                    © 
                    <a href=\"#\"> Supercharged by DGT Concept </a>
                </td>
                <td width=\"45%\" class=\"text-right\">
                    © 
                    <a href=\"#\"> Powered By TALENSOFT </a>
                </td>
                <td width=\"5%\"></td>
            </tr>
        </table>
        </div>
    </footer>
{% endblock %}", "home/menu.html.twig", "C:\\Users\\Stagiaire\\DGTCS\\templates\\home\\menu.html.twig");
    }
}