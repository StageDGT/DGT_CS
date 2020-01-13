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

/* base.html.twig */
class __TwigTemplate_a2d6757c76463cbed94b3ee811f6d2e30f009056634b308a28ebf90414b2f5e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 3
            echo "
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
            // line 7
            $this->displayBlock('title', $context, $blocks);
            echo "</title>
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Material Design Bootstrap -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css\" rel=\"stylesheet\">
        <!-- JQuery -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <!-- Bootstrap tooltips -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
        <!-- Bootstrap core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        <!-- MDB core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js\"></script>
        ";
            // line 22
            $this->displayBlock('stylesheets', $context, $blocks);
            // line 23
            echo "    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark special-color-dark\">
                <a href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . "logo.png")), "html", null, true);
            echo "\" /></a>
                <a class=\"navbar-brand\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menu");
            echo "\">DGT Creator Services</a>
                <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                    <ul class=\"navbar-nav mr-auto\">
                    ";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 32
                echo "                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-cog\"></i> Connecté en tant que ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
                echo "
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_office");
                echo "\">Gérer les utilisateurs</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
                // line 39
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
                echo "\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
                            </div>
                        </li>
                    ";
            }
            // line 43
            echo "                    </ul>
                    <span class=\"navbar-text white-text\">
                        Digital Learning Content Manager
                    </span>
                </div>    
            </nav>
            <script>
                function FermerMenu(){
                    document.getElementById('DC1').style.left = '-90px';
                    document.getElementById('DC2').style.left = '-90px';
                    document.getElementById('DC3').style.left = '-90px';
                    document.getElementById('DC4').style.left = '-90px';
                    document.getElementById('DC5').style.left = '-90px';
                    document.getElementById('DC6').style.left = '-90px';
                }

                function OuvrirMenu(){
                    document.getElementById('DC1').style.left = '-0px';
                    document.getElementById('DC2').style.left = '-0px';
                    document.getElementById('DC3').style.left = '-0px';
                    document.getElementById('DC4').style.left = '-0px';
                    document.getElementById('DC5').style.left = '-0px';
                    document.getElementById('DC6').style.left = '-0px';

                }
            </script>
            <style>
                body{
                    background-image: url(\"/image/background.png\");
                }

                #sidebar {
                    min-width: 270px;
                    max-width: 270px;
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

            </style>
        </header>
        ";
            // line 98
            $this->displayBlock('body', $context, $blocks);
            // line 99
            echo "        ";
            $this->displayBlock('javascripts', $context, $blocks);
            // line 100
            echo "        <br/><br/>
        <footer class=\"page-footer font-small\" style=\"color:white; position: absolute; bottom: 0; left: 0; right: 0; background-color: #3F729B;\">
            <div class=\"footer-copyright py-3\">
                <table width=\"100%\">
                    <tr width=\"100%\">
                        <td width=\"5%\"></td>
                        <td width=\"45%\" class=\"text-left\">
                            © 
                            <a href=\"https://dgt-concept.com/\" target=\"_blank\"> Supercharged by DGT Concept </a>
                        
                        </td>
                        <td width=\"45%\" class=\"text-right\">
                            © 
                            <a href=\"https://www.talentsoft.fr/\" target=\"_blank\"> Powered By TALENTSOFT </a>
                        </td>
                        <td width=\"5%\"></td>
                    </tr>
                </table>
            </div>
        </footer>
    </body>
</html>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "DGT CS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 99,  252 => 98,  234 => 22,  215 => 7,  182 => 100,  179 => 99,  177 => 98,  120 => 43,  113 => 39,  108 => 37,  102 => 34,  98 => 32,  96 => 31,  90 => 28,  84 => 27,  78 => 23,  76 => 22,  58 => 7,  52 => 3,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% if is_granted('IS_AUTHENTICATED_FULLY') %}

<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}DGT CS{% endblock %}</title>
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.2/css/all.css\">
        <!-- Bootstrap core CSS -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css\" rel=\"stylesheet\">
        <!-- Material Design Bootstrap -->
        <link href=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/css/mdb.min.css\" rel=\"stylesheet\">
        <!-- JQuery -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>
        <!-- Bootstrap tooltips -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js\"></script>
        <!-- Bootstrap core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js\"></script>
        <!-- MDB core JavaScript -->
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js\"></script>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-expand-lg navbar-dark special-color-dark\">
                <a href=\"{{path('menu')}}\"><img src=\"{{ asset('image/'~ 'logo.png')}}\" /></a>
                <a class=\"navbar-brand\" href=\"{{path('menu')}}\">DGT Creator Services</a>
                <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                    <ul class=\"navbar-nav mr-auto\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <i class=\"fas fa-cog\"></i> Connecté en tant que {{ app.user.username }}
                            </a>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"{{ path('back_office') }}\">Gérer les utilisateurs</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{ path('logout') }}\"><i class=\"fas fa-sign-out-alt\"></i> Déconnexion</a>
                            </div>
                        </li>
                    {% endif %}
                    </ul>
                    <span class=\"navbar-text white-text\">
                        Digital Learning Content Manager
                    </span>
                </div>    
            </nav>
            <script>
                function FermerMenu(){
                    document.getElementById('DC1').style.left = '-90px';
                    document.getElementById('DC2').style.left = '-90px';
                    document.getElementById('DC3').style.left = '-90px';
                    document.getElementById('DC4').style.left = '-90px';
                    document.getElementById('DC5').style.left = '-90px';
                    document.getElementById('DC6').style.left = '-90px';
                }

                function OuvrirMenu(){
                    document.getElementById('DC1').style.left = '-0px';
                    document.getElementById('DC2').style.left = '-0px';
                    document.getElementById('DC3').style.left = '-0px';
                    document.getElementById('DC4').style.left = '-0px';
                    document.getElementById('DC5').style.left = '-0px';
                    document.getElementById('DC6').style.left = '-0px';

                }
            </script>
            <style>
                body{
                    background-image: url(\"/image/background.png\");
                }

                #sidebar {
                    min-width: 270px;
                    max-width: 270px;
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

            </style>
        </header>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <br/><br/>
        <footer class=\"page-footer font-small\" style=\"color:white; position: absolute; bottom: 0; left: 0; right: 0; background-color: #3F729B;\">
            <div class=\"footer-copyright py-3\">
                <table width=\"100%\">
                    <tr width=\"100%\">
                        <td width=\"5%\"></td>
                        <td width=\"45%\" class=\"text-left\">
                            © 
                            <a href=\"https://dgt-concept.com/\" target=\"_blank\"> Supercharged by DGT Concept </a>
                        
                        </td>
                        <td width=\"45%\" class=\"text-right\">
                            © 
                            <a href=\"https://www.talentsoft.fr/\" target=\"_blank\"> Powered By TALENTSOFT </a>
                        </td>
                        <td width=\"5%\"></td>
                    </tr>
                </table>
            </div>
        </footer>
    </body>
</html>
{% endif %}", "base.html.twig", "C:\\Users\\Stagiaire\\DGTCS\\templates\\base.html.twig");
    }
}
