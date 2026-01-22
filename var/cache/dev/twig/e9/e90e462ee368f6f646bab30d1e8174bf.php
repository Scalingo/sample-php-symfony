<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Security/Collector/security.html.twig */
class __TwigTemplate_264297de6bf0cbe4723c9c6f16c2f6ce extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        yield "Security";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #collector-content .decision-log .voter_result td {
            border-top-width: 1px;
            border-bottom-width: 0;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details td {
            border-top-width: 0;
            border-bottom-width: 1px;
            padding-bottom: 0;
        }

        #collector-content .decision-log .voter_details table {
            border: 0;
            margin: 0;
            box-shadow: unset;
        }

        #collector-content .decision-log .voter_details table td {
            border: 0;
            padding: 0 0 8px 0;
        }

        #collector-content .authenticator-name {
            align-items: center;
            display: flex;
            gap: 16px;
        }

        #collector-content .authenticators .toggle-button {
            margin-left: auto;
        }
        #collector-content .authenticators .sf-toggle-on .toggle-button {
            transform: rotate(180deg);
        }
        #collector-content .authenticators .toggle-button svg {
            display: block;
        }

        #collector-content .authenticators th,
        #collector-content .authenticators td {
            vertical-align: baseline;
        }
        #collector-content .authenticators th,
        #collector-content .authenticators td {
            vertical-align: baseline;
        }

        #collector-content .authenticators .label {
            display: block;
            text-align: center;
        }

        #collector-content .authenticator-data {
            box-shadow: none;
            margin: 0;
        }

        #collector-content .authenticator-data tr:first-child th,
        #collector-content .authenticator-data tr:first-child td {
            border-top: 0;
        }

        #collector-content .authenticators .badge {
            color: var(--white);
            display: inline-block;
            margin: 4px 0;
        }
        #collector-content .authenticators .badge.badge-resolved {
            background-color: var(--green-500);
        }
        #collector-content .authenticators .badge.badge-not_resolved {
            background-color: var(--yellow-500);
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 87
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 88
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 89
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", true, true, false, 90)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 90), "n/a")) : ("n/a")), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 92
            yield "
        ";
            // line 93
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 94
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 95
                    yield "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Impersonator</b>
                        <span>";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonatorUser", [], "any", false, false, false, 98), "html", null, true);
                    yield "</span>
                    </div>
                </div>
            ";
                }
                // line 102
                yield "
            <div class=\"sf-toolbar-info-group\">
                ";
                // line 104
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 105
                    yield "                    ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 106
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Logged in as</b>
                            <span>";
                        // line 108
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 108), "html", null, true);
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-";
                        // line 113
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("green") : ("yellow"));
                        yield "\">";
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Yes") : ("No"));
                        yield "</span>
                        </div>

                        <div class=\"sf-toolbar-info-piece\">
                            <b>Roles</b>
                            <span>
                                ";
                        // line 119
                        $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 119), 1);
                        // line 120
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 120)), "html", null, true);
                        yield "
                                ";
                        // line 121
                        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["remainingRoles"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 122
                            yield "                                    +
                                    <abbr title=\"";
                            // line 123
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                            yield "\">
                                        ";
                            // line 124
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["remainingRoles"] ?? null)), "html", null, true);
                            yield " more
                                    </abbr>
                                ";
                        }
                        // line 127
                        yield "                            </span>
                        </div>

                        ";
                        // line 130
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 131
                            yield "                            <div class=\"sf-toolbar-info-piece\">
                                <b>Inherited Roles</b>
                                <span>
                                    ";
                            // line 134
                            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 134))) {
                                // line 135
                                yield "                                        none
                                    ";
                            } else {
                                // line 137
                                yield "                                        ";
                                $context["remainingRoles"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 137), 1);
                                // line 138
                                yield "                                        ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 138)), "html", null, true);
                                yield "
                                        ";
                                // line 139
                                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["remainingRoles"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 140
                                    yield "                                            +
                                            <abbr title=\"";
                                    // line 141
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["remainingRoles"] ?? null), ", "), "html", null, true);
                                    yield "\">
                                                ";
                                    // line 142
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["remainingRoles"] ?? null)), "html", null, true);
                                    yield " more
                                            </abbr>
                                        ";
                                }
                                // line 145
                                yield "                                    ";
                            }
                            // line 146
                            yield "                                </span>
                            </div>
                        ";
                        }
                        // line 149
                        yield "
                        <div class=\"sf-toolbar-info-piece\">
                            <b>Token class</b>
                            <span>";
                        // line 152
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "tokenClass", [], "any", false, false, false, 152), "html", null, true));
                        yield "</span>
                        </div>
                    ";
                    } else {
                        // line 155
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Authenticated</b>
                            <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">No</span>
                        </div>
                    ";
                    }
                    // line 160
                    yield "
                    ";
                    // line 161
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 161)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 162
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Firewall name</b>
                            <span>";
                        // line 164
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 164), "name", [], "any", false, false, false, 164), "html", null, true);
                        yield "</span>
                        </div>
                    ";
                    }
                    // line 167
                    yield "
                    ";
                    // line 168
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 168) && CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 168))) {
                        // line 169
                        yield "                        <div class=\"sf-toolbar-info-piece\">
                            <b>Actions</b>
                            <span>
                                <a href=\"";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "logoutUrl", [], "any", false, false, false, 172), "html", null, true);
                        yield "\">Logout</a>
                                ";
                        // line 173
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonated", [], "any", false, false, false, 173) && CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 173))) {
                            // line 174
                            yield "                                    | <a href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "impersonationExitPath", [], "any", false, false, false, 174), "html", null, true);
                            yield "\">Exit impersonation</a>
                                ";
                        }
                        // line 176
                        yield "                            </span>
                        </div>
                    ";
                    }
                    // line 179
                    yield "                ";
                } else {
                    // line 180
                    yield "                    <div class=\"sf-toolbar-info-piece\">
                        <span>The security is disabled.</span>
                    </div>
                ";
                }
                // line 184
                yield "            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 186
            yield "
        ";
            // line 187
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 191
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 192
        yield "    <span class=\"label ";
        yield ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 192) ||  !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 192))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 193
        yield Twig\Extension\CoreExtension::source($this->env, "@Security/Collector/icon.svg");
        yield "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 199
        yield "    <h2>Security</h2>
    ";
        // line 200
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 201
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 202
            yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 202))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Token</h3>

                <div class=\"tab-content\">
                    ";
            // line 206
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 207
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "user", [], "any", false, false, false, 209), "html", null, true);
                yield "</span>
                                <span class=\"label\">Username</span>
                            </div>

                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 214
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Authenticated</span>
                            </div>

                            ";
                // line 218
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authProfileToken", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 219
                    yield "                                <div class=\"metric\">
                                    <span class=\"value\">
                                        <a href=\"";
                    // line 221
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authProfileToken", [], "any", false, false, false, 221), "panel" => "security"]), "html", null, true);
                    yield "\">";
                    // line 222
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authProfileToken", [], "any", false, false, false, 222), "html", null, true);
                    // line 223
                    yield "</a>
                                    </span>
                                    <span class=\"label\">From</span>
                                </div>
                            ";
                }
                // line 228
                yield "                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"key\">Property</th>
                                    <th scope=\"col\">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Roles</th>
                                    <td>
                                        ";
                // line 241
                yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 241))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 241), 1)));
                yield "

                                        ";
                // line 243
                if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticated", [], "any", false, false, false, 243) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "roles", [], "any", false, false, false, 243)))) {
                    // line 244
                    yield "                                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                                        ";
                }
                // line 246
                yield "                                    </td>
                                </tr>

                                ";
                // line 249
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "supportsRoleHierarchy", [], "any", false, false, false, 249)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 250
                    yield "                                <tr>
                                    <th>Inherited Roles</th>
                                    <td>";
                    // line 252
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 252))) ? ("none") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "inheritedRoles", [], "any", false, false, false, 252), 1)));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 255
                yield "
                                ";
                // line 256
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 257
                    yield "                                <tr>
                                    <th>Token</th>
                                    <td>";
                    // line 259
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "token", [], "any", false, false, false, 259));
                    yield "</td>
                                </tr>
                                ";
                }
                // line 262
                yield "                            </tbody>
                        </table>
                    ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 264
($context["collector"] ?? null), "enabled", [], "any", false, false, false, 264)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 265
                yield "                        <div class=\"empty\">
                            <p>
                                There is no security token.
                                ";
                // line 268
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "deauthProfileToken", [], "any", false, false, false, 268)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 269
                    yield "                                    It was removed in
                                    <a href=\"";
                    // line 270
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "deauthProfileToken", [], "any", false, false, false, 270), "panel" => "security"]), "html", null, true);
                    yield "\">";
                    // line 271
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "deauthProfileToken", [], "any", false, false, false, 271), "html", null, true);
                    // line 272
                    yield "</a>.
                                ";
                }
                // line 274
                yield "                            </p>
                        </div>
                    ";
            }
            // line 277
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 280
            yield ((( !CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 280) || Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 280), "security_enabled", [], "any", false, false, false, 280)))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Firewall</h3>
                <div class=\"tab-content\">
                    ";
            // line 283
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 284
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 286), "name", [], "any", false, false, false, 286), "html", null, true);
                yield "</span>
                                <span class=\"label\">Name</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 290
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 290), "security_enabled", [], "any", false, false, false, 290)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Security enabled</span>
                            </div>
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 294
                yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 294), "stateless", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yes") : ("no"))) . ".svg"));
                yield "</span>
                                <span class=\"label\">Stateless</span>
                            </div>
                        </div>

                        ";
                // line 299
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 299), "security_enabled", [], "any", false, false, false, 299)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 300
                    yield "                            <h4>Configuration</h4>
                            <table>
                                <thead>
                                    <tr>
                                        <th scope=\"col\" class=\"key\">Key</th>
                                        <th scope=\"col\">Value</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>provider</th>
                                        <td>";
                    // line 311
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 311), "provider", [], "any", false, false, false, 311)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 311), "provider", [], "any", false, false, false, 311), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>context</th>
                                        <td>";
                    // line 315
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 315), "context", [], "any", false, false, false, 315)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 315), "context", [], "any", false, false, false, 315), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>entry_point</th>
                                        <td>";
                    // line 319
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 319), "entry_point", [], "any", false, false, false, 319)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 319), "entry_point", [], "any", false, false, false, 319), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>user_checker</th>
                                        <td>";
                    // line 323
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 323), "user_checker", [], "any", false, false, false, 323)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 323), "user_checker", [], "any", false, false, false, 323), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_handler</th>
                                        <td>";
                    // line 327
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 327), "access_denied_handler", [], "any", false, false, false, 327)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 327), "access_denied_handler", [], "any", false, false, false, 327), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>access_denied_url</th>
                                        <td>";
                    // line 331
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 331), "access_denied_url", [], "any", false, false, false, 331)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 331), "access_denied_url", [], "any", false, false, false, 331), "html", null, true)) : ("(none)"));
                    yield "</td>
                                    </tr>
                                    <tr>
                                        <th>authenticators</th>
                                        <td>";
                    // line 335
                    yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 335), "authenticators", [], "any", false, false, false, 335))) ? ("(none)") : ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "firewall", [], "any", false, false, false, 335), "authenticators", [], "any", false, false, false, 335), 1)));
                    yield "</td>
                                    </tr>
                                </tbody>
                            </table>
                        ";
                }
                // line 340
                yield "                    ";
            }
            // line 341
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 344
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 344)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 344), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Listeners</h3>
                <div class=\"tab-content\">
                    ";
            // line 347
            if (Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", true, true, false, 347)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 347), [])) : ([])))) {
                // line 348
                yield "                        <div class=\"empty\">
                            <p>No security listeners have been recorded. Check that debugging is enabled in the kernel.</p>
                        </div>
                    ";
            } else {
                // line 352
                yield "                        <table>
                            <thead>
                            <tr>
                                <th>Listener</th>
                                <th>Duration</th>
                                <th>Response</th>
                            </tr>
                            </thead>

                            ";
                // line 361
                $context["previous_event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 361));
                // line 362
                yield "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "listeners", [], "any", false, false, false, 362));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                    // line 363
                    yield "                                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 363) || ($context["listener"] != ($context["previous_event"] ?? null)))) {
                        // line 364
                        yield "                                    ";
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 364)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 365
                            yield "                                        </tbody>
                                    ";
                        }
                        // line 367
                        yield "                                    <tbody>
                                    ";
                        // line 368
                        $context["previous_event"] = $context["listener"];
                        // line 369
                        yield "                                ";
                    }
                    // line 370
                    yield "
                                <tr>
                                    <td class=\"font-normal\">";
                    // line 372
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "stub", [], "any", false, false, false, 372));
                    yield "</td>
                                    <td class=\"no-wrap\">";
                    // line 373
                    yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 373))) ? ("(none)") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f ms", (CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "time", [], "any", false, false, false, 373) * 1000)), "html", null, true)));
                    yield "</td>
                                    <td class=\"font-normal\">";
                    // line 374
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["listener"], "response", [], "any", false, false, false, 374))) : ("(none)"));
                    yield "</td>
                                </tr>

                                ";
                    // line 377
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 377)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 378
                        yield "                                    </tbody>
                                ";
                    }
                    // line 380
                    yield "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                yield "                        </table>
                    ";
            }
            // line 383
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 386
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 386)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 386), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Authenticators</h3>
                <div class=\"tab-content\">
                    ";
            // line 389
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", true, true, false, 389)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 389), [])) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 390
                yield "                        <table class=\"authenticators\">
                            <colgroup>
                                <col>
                                <col style=\"width: 100%\">
                            </colgroup>
                            <thead>
                            <tr>
                                <th scope=\"col\">Status</th>
                                <th scope=\"col\">Authenticator</th>
                            </tr>
                            </thead>
                            ";
                // line 401
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "authenticators", [], "any", false, false, false, 401));
                foreach ($context['_seq'] as $context["i"] => $context["authenticator"]) {
                    // line 402
                    yield "                                <tr class=\"sf-toggle\"
                                    data-toggle-selector=\"#authenticator-";
                    // line 403
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\"
                                    data-toggle-initial=\"";
                    // line 404
                    yield (((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, false, 404))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("display") : (""));
                    yield "\"
                                >
                                    <td class=\"font-normal text-small\">
                                        ";
                    // line 407
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, false, 407)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 408
                        yield "                                            ";
                        [$context["status_text"], $context["label_status"]] =                         ["success", "success"];
                        // line 409
                        yield "                                        ";
                    } elseif ((null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "authenticated", [], "any", false, false, false, 409))) {
                        // line 410
                        yield "                                            ";
                        [$context["status_text"], $context["label_status"]] =                         ["skipped", false];
                        // line 411
                        yield "                                        ";
                    } else {
                        // line 412
                        yield "                                            ";
                        [$context["status_text"], $context["label_status"]] =                         ["failure", "error"];
                        // line 413
                        yield "                                        ";
                    }
                    // line 414
                    yield "                                        <span class=\"label ";
                    yield (((($tmp = ($context["label_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("status-" . ($context["label_status"] ?? null)), "html", null, true)) : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_text"] ?? null), "html", null, true);
                    yield "</span>
                                    </td>
                                    <td>
                                        <span class=\"authenticator-name\">
                                            ";
                    // line 418
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "stub", [], "any", false, false, false, 418));
                    yield "
                                            <button class=\"btn btn-link toggle-button\" type=\"button\">
                                                ";
                    // line 420
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                    yield "
                                            </button>
                                        </span>
                                        <div id=\"authenticator-";
                    // line 423
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "\" class=\"font-normal\">
                                            ";
                    // line 424
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, false, 424) === false)) {
                        // line 425
                        yield "                                                <div class=\"empty\">
                                                    <p>This authenticator did not support the request.</p>
                                                </div>
                                            ";
                    } elseif ((null === CoreExtension::getAttribute($this->env, $this->source,                     // line 428
$context["authenticator"], "authenticated", [], "any", false, false, false, 428))) {
                        // line 429
                        yield "                                                <div class=\"empty\">
                                                    <p>An authenticator ran before this one.</p>
                                                </div>
                                            ";
                    } else {
                        // line 433
                        yield "                                                <table class=\"authenticator-data\">
                                                    <colgroup>
                                                        <col>
                                                        <col style=\"width: 100%\">
                                                    </colgroup>
                                                    <tr>
                                                        <th scope=\"row\">Lazy</th>
                                                        <td>";
                        // line 440
                        yield (((null === CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "supports", [], "any", false, false, false, 440))) ? ("yes") : ("no"));
                        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope=\"row\">Duration</th>
                                                        <td>";
                        // line 444
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f ms", (CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "duration", [], "any", false, false, false, 444) * 1000)), "html", null, true);
                        yield "</td>
                                                    </tr>
                                                    ";
                        // line 446
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 446)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 447
                            yield "                                                        <tr>
                                                            <th scope=\"row\">Passport</th>
                                                            <td>";
                            // line 449
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "passport", [], "any", false, false, false, 449));
                            yield "</td>
                                                        </tr>
                                                    ";
                        }
                        // line 452
                        yield "                                                    ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, false, 452)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 453
                            yield "                                                        <tr>
                                                            <th scope=\"row\">Badges</th>
                                                            <td>
                                                                ";
                            // line 456
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "badges", [], "any", false, false, false, 456));
                            foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
                                // line 457
                                yield "                                                                    <span class=\"badge badge-";
                                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "resolved", [], "any", false, false, false, 457)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("resolved") : ("not_resolved"));
                                yield "\">
                                                                        ";
                                // line 458
                                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["badge"], "stub", [], "any", false, false, false, 458), "html", null, true));
                                yield "
                                                                    </span>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['badge'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 461
                            yield "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        // line 464
                        yield "                                                    ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "exception", [], "any", false, false, false, 464)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 465
                            yield "                                                        <tr>
                                                            <th scope=\"row\">Exception</th>
                                                            <td>";
                            // line 467
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["authenticator"], "exception", [], "any", false, false, false, 467));
                            yield "</td>
                                                        </tr>
                                                    ";
                        }
                        // line 470
                        yield "                                                </table>
                                            ";
                    }
                    // line 472
                    yield "                                        </div>
                                    </td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['i'], $context['authenticator'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 476
                yield "                        </table>
                    ";
            } else {
                // line 478
                yield "                        <div class=\"empty\">
                            <p>No authenticators have been recorded. Check previous profiles on your authentication endpoint.</p>
                        </div>
                    ";
            }
            // line 482
            yield "                </div>
            </div>

            <div class=\"tab ";
            // line 485
            yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 485)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 485), [])) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Access Decision</h3>
                <div class=\"tab-content\">
                    ";
            // line 488
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", true, true, false, 488)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 488), [])) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 489
                yield "                        <div class=\"metrics\">
                            <div class=\"metric\">
                                <span class=\"value\">";
                // line 491
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", true, true, false, 491)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 491), "unknown")) : ("unknown")), "html", null, true);
                yield "</span>
                                <span class=\"label\">Strategy</span>
                            </div>
                        </div>

                        <table class=\"voters\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Voter class</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 505
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voters", [], "any", false, false, false, 505));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["voter"]) {
                    // line 506
                    yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 507
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 507), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">";
                    // line 508
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["voter"]);
                    yield "</td>
                                    </tr>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['voter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 511
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 514
            yield "                    ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", true, true, false, 514)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 514), [])) : ([])))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 515
                yield "                        <h2>Access decision log</h2>

                        <table class=\"decision-log\">
                            <col style=\"width: 30px\">
                            <col style=\"width: 120px\">
                            <col style=\"width: 25%\">
                            <col style=\"width: 60%\">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Result</th>
                                    <th>Attributes</th>
                                    <th>Object</th>
                                </tr>
                            </thead>

                            <tbody>
                                ";
                // line 533
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "accessDecisionLog", [], "any", false, false, false, 533));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["decision"]) {
                    // line 534
                    yield "                                    <tr class=\"voter_result\">
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 535
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 535), "html", null, true);
                    yield "</td>
                                        <td class=\"font-normal\">
                                            ";
                    // line 537
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "result", [], "any", false, false, false, 537)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<span class=\"label status-success same-width\">GRANTED</span>") : ("<span class=\"label status-error same-width\">DENIED</span>"));
                    // line 540
                    yield "
                                        </td>
                                        <td>
                                            ";
                    // line 543
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 543)) == 1)) {
                        // line 544
                        yield "                                                ";
                        $context["attribute"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 544));
                        // line 545
                        yield "                                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", true, true, false, 545)) {
                            // line 546
                            yield "                                                    Expression: <pre><code>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["attribute"] ?? null), "expression", [], "any", false, false, false, 546), "html", null, true);
                            yield "</code></pre>
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 547
($context["attribute"] ?? null), "type", [], "any", false, false, false, 547) == "string")) {
                            // line 548
                            yield "                                                    ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["attribute"] ?? null), "html", null, true);
                            yield "
                                                ";
                        } else {
                            // line 550
                            yield "                                                     ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, ($context["attribute"] ?? null));
                            yield "
                                                ";
                        }
                        // line 552
                        yield "                                            ";
                    } else {
                        // line 553
                        yield "                                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "attributes", [], "any", false, false, false, 553));
                        yield "
                                            ";
                    }
                    // line 555
                    yield "                                        </td>
                                        <td>";
                    // line 556
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "seek", ["object"], "method", false, false, false, 556));
                    yield "</td>
                                    </tr>
                                    <tr class=\"voter_details\">
                                        <td></td>
                                        <td colspan=\"3\">
                                        ";
                    // line 561
                    if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 561))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 562
                        yield "                                            ";
                        $context["voter_details_id"] = ("voter-details-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 562));
                        // line 563
                        yield "                                            <div id=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["voter_details_id"] ?? null), "html", null, true);
                        yield "\" class=\"sf-toggle-content sf-toggle-hidden\">
                                                <table>
                                                   <tbody>
                                                    ";
                        // line 566
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["decision"], "voter_details", [], "any", false, false, false, 566));
                        foreach ($context['_seq'] as $context["_key"] => $context["voter_detail"]) {
                            // line 567
                            yield "                                                        <tr>
                                                            <td class=\"font-normal\">";
                            // line 568
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, (($_v0 = $context["voter_detail"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["class"] ?? null) : null));
                            yield "</td>
                                                            ";
                            // line 569
                            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "voterStrategy", [], "any", false, false, false, 569) == "unanimous")) {
                                // line 570
                                yield "                                                            <td class=\"font-normal text-small\">attribute ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = (($_v2 = $context["voter_detail"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["attributes"] ?? null) : null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[0] ?? null) : null), "html", null, true);
                                yield "</td>
                                                            ";
                            }
                            // line 572
                            yield "                                                            <td class=\"font-normal text-small\">
                                                                ";
                            // line 573
                            if (((($_v3 = $context["voter_detail"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["vote"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_GRANTED"))) {
                                // line 574
                                yield "                                                                    GRANTED
                                                                ";
                            } elseif (((($_v4 =                             // line 575
$context["voter_detail"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4["vote"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_ABSTAIN"))) {
                                // line 576
                                yield "                                                                    ABSTAIN
                                                                ";
                            } elseif (((($_v5 =                             // line 577
$context["voter_detail"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["vote"] ?? null) : null) == Twig\Extension\CoreExtension::constant("Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface::ACCESS_DENIED"))) {
                                // line 578
                                yield "                                                                    DENIED
                                                                ";
                            } else {
                                // line 580
                                yield "                                                                    unknown (";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v6 = $context["voter_detail"]) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6["vote"] ?? null) : null), "html", null, true);
                                yield ")
                                                                ";
                            }
                            // line 582
                            yield "                                                                ";
                            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((($_v7 = $context["voter_detail"]) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7["reasons"] ?? null) : null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 583
                                yield "                                                                    ";
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable((($_v8 = $context["voter_detail"]) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8["reasons"] ?? null) : null));
                                foreach ($context['_seq'] as $context["_key"] => $context["voter_reason"]) {
                                    // line 584
                                    yield "                                                                        <br>";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["voter_reason"], "html", null, true);
                                    yield "
                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['voter_reason'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 586
                                yield "                                                                ";
                            }
                            // line 587
                            yield "                                                            </td>
                                                        </tr>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['voter_detail'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 590
                        yield "                                                    </tbody>
                                                </table>
                                            </div>
                                            <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                        // line 593
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["voter_details_id"] ?? null), "html", null, true);
                        yield "\" data-toggle-alt-content=\"Hide voter details\">Show voter details</a>
                                        ";
                    }
                    // line 595
                    yield "                                        </td>
                                    </tr>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['decision'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 598
                yield "                            </tbody>
                        </table>
                    </div>
                ";
            }
            // line 602
            yield "            </div>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Security/Collector/security.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1311 => 602,  1305 => 598,  1289 => 595,  1284 => 593,  1279 => 590,  1271 => 587,  1268 => 586,  1259 => 584,  1254 => 583,  1251 => 582,  1245 => 580,  1241 => 578,  1239 => 577,  1236 => 576,  1234 => 575,  1231 => 574,  1229 => 573,  1226 => 572,  1220 => 570,  1218 => 569,  1214 => 568,  1211 => 567,  1207 => 566,  1200 => 563,  1197 => 562,  1195 => 561,  1187 => 556,  1184 => 555,  1178 => 553,  1175 => 552,  1169 => 550,  1163 => 548,  1161 => 547,  1156 => 546,  1153 => 545,  1150 => 544,  1148 => 543,  1143 => 540,  1141 => 537,  1136 => 535,  1133 => 534,  1116 => 533,  1096 => 515,  1093 => 514,  1088 => 511,  1071 => 508,  1067 => 507,  1064 => 506,  1047 => 505,  1030 => 491,  1026 => 489,  1024 => 488,  1018 => 485,  1013 => 482,  1007 => 478,  1003 => 476,  994 => 472,  990 => 470,  984 => 467,  980 => 465,  977 => 464,  972 => 461,  963 => 458,  958 => 457,  954 => 456,  949 => 453,  946 => 452,  940 => 449,  936 => 447,  934 => 446,  929 => 444,  922 => 440,  913 => 433,  907 => 429,  905 => 428,  900 => 425,  898 => 424,  894 => 423,  888 => 420,  883 => 418,  873 => 414,  870 => 413,  867 => 412,  864 => 411,  861 => 410,  858 => 409,  855 => 408,  853 => 407,  847 => 404,  843 => 403,  840 => 402,  836 => 401,  823 => 390,  821 => 389,  815 => 386,  810 => 383,  806 => 381,  792 => 380,  788 => 378,  786 => 377,  780 => 374,  776 => 373,  772 => 372,  768 => 370,  765 => 369,  763 => 368,  760 => 367,  756 => 365,  753 => 364,  750 => 363,  732 => 362,  730 => 361,  719 => 352,  713 => 348,  711 => 347,  705 => 344,  700 => 341,  697 => 340,  689 => 335,  682 => 331,  675 => 327,  668 => 323,  661 => 319,  654 => 315,  647 => 311,  634 => 300,  632 => 299,  624 => 294,  617 => 290,  610 => 286,  606 => 284,  604 => 283,  598 => 280,  593 => 277,  588 => 274,  584 => 272,  582 => 271,  579 => 270,  576 => 269,  574 => 268,  569 => 265,  567 => 264,  563 => 262,  557 => 259,  553 => 257,  551 => 256,  548 => 255,  542 => 252,  538 => 250,  536 => 249,  531 => 246,  527 => 244,  525 => 243,  520 => 241,  505 => 228,  498 => 223,  496 => 222,  493 => 221,  489 => 219,  487 => 218,  480 => 214,  472 => 209,  468 => 207,  466 => 206,  459 => 202,  456 => 201,  454 => 200,  451 => 199,  441 => 198,  429 => 193,  424 => 192,  414 => 191,  403 => 187,  400 => 186,  395 => 184,  389 => 180,  386 => 179,  381 => 176,  375 => 174,  373 => 173,  369 => 172,  364 => 169,  362 => 168,  359 => 167,  353 => 164,  349 => 162,  347 => 161,  344 => 160,  337 => 155,  331 => 152,  326 => 149,  321 => 146,  318 => 145,  312 => 142,  308 => 141,  305 => 140,  303 => 139,  298 => 138,  295 => 137,  291 => 135,  289 => 134,  284 => 131,  282 => 130,  277 => 127,  271 => 124,  267 => 123,  264 => 122,  262 => 121,  257 => 120,  255 => 119,  244 => 113,  236 => 108,  232 => 106,  229 => 105,  227 => 104,  223 => 102,  216 => 98,  211 => 95,  208 => 94,  206 => 93,  203 => 92,  197 => 90,  192 => 89,  189 => 88,  186 => 87,  176 => 86,  88 => 6,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Security/Collector/security.html.twig", "/Users/samir/Desktop/Scalingo/sample/sample-php-symfony/vendor/symfony/security-bundle/Resources/views/Collector/security.html.twig");
    }
}
