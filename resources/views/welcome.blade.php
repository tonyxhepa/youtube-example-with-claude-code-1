<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }} — Build faster, ship smarter</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-100">

        {{-- Navigation --}}
        <header class="sticky top-0 z-50 w-full border-b border-zinc-200 dark:border-zinc-800 bg-white/80 dark:bg-zinc-950/80 backdrop-blur-md">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <nav class="flex h-16 items-center justify-between">
                    <div class="flex items-center gap-2">
                        <div class="flex aspect-square size-8 items-center justify-center rounded-md bg-zinc-900 dark:bg-white">
                            <x-app-logo-icon class="size-5 fill-current text-white dark:text-zinc-900" />
                        </div>
                        <span class="font-semibold text-zinc-900 dark:text-white text-sm">{{ config('app.name') }}</span>
                    </div>

                    <div class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-600 dark:text-zinc-400">
                        <a href="#features" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Features</a>
                        <a href="#pricing" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Pricing</a>
                        <a href="https://laravel.com/docs" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Docs</a>
                    </div>

                    <div class="flex items-center gap-3">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-medium text-zinc-600 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="inline-flex items-center gap-1.5 rounded-lg bg-zinc-900 dark:bg-white px-4 py-2 text-sm font-medium text-white dark:text-zinc-900 hover:bg-zinc-700 dark:hover:bg-zinc-100 transition-colors">
                                        Get started
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-3.5">
                                            <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </nav>
            </div>
        </header>

        <main>
            {{-- Hero --}}
            <section class="relative overflow-hidden pt-24 pb-20 sm:pt-32 sm:pb-28">
                <div class="absolute inset-0 -z-10">
                    <div class="absolute inset-0 bg-gradient-to-br from-violet-50 via-white to-cyan-50 dark:from-violet-950/20 dark:via-zinc-950 dark:to-cyan-950/20"></div>
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[600px] rounded-full bg-gradient-to-br from-violet-200/30 to-cyan-200/30 dark:from-violet-800/10 dark:to-cyan-800/10 blur-3xl"></div>
                </div>

                <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
                    <div class="inline-flex items-center gap-2 rounded-full border border-violet-200 dark:border-violet-800/50 bg-violet-50 dark:bg-violet-950/30 px-4 py-1.5 text-xs font-medium text-violet-700 dark:text-violet-300 mb-8">
                        <span class="relative flex size-2">
                            <span class="animate-ping absolute inline-flex size-full rounded-full bg-violet-400 opacity-75"></span>
                            <span class="relative inline-flex size-2 rounded-full bg-violet-500"></span>
                        </span>
                        Now in public beta — try it free
                    </div>

                    <h1 class="mx-auto max-w-4xl text-5xl sm:text-6xl lg:text-7xl font-bold tracking-tight text-zinc-900 dark:text-white leading-tight">
                        Build faster,<br>
                        <span class="bg-gradient-to-r from-violet-600 to-cyan-600 bg-clip-text text-transparent">ship smarter</span>
                    </h1>

                    <p class="mx-auto mt-6 max-w-2xl text-lg text-zinc-500 dark:text-zinc-400 leading-relaxed">
                        The full-stack platform built on Laravel that helps teams move from idea to production in record time. Authentication, billing, teams — all included.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-flex items-center gap-2 rounded-xl bg-zinc-900 dark:bg-white px-8 py-3.5 text-sm font-semibold text-white dark:text-zinc-900 hover:bg-zinc-700 dark:hover:bg-zinc-100 transition-colors shadow-lg shadow-zinc-900/10">
                                Start for free
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                    <path fill-rule="evenodd" d="M6.22 4.22a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06l-3.25 3.25a.75.75 0 0 1-1.06-1.06L8.94 8 6.22 5.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif
                        <a href="https://laravel.com/docs" target="_blank" class="inline-flex items-center gap-2 rounded-xl border border-zinc-200 dark:border-zinc-700 px-8 py-3.5 text-sm font-semibold text-zinc-700 dark:text-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-800 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                <path d="M7.25 3.688a8.035 8.035 0 0 0-4.872-.604A.75.75 0 0 0 1.75 3.8v7.48c0 .483.5.81.958.608a8.979 8.979 0 0 1 4.542-.59V3.688ZM8.75 11.298a8.966 8.966 0 0 1 4.542.59c.458.202.958-.126.958-.608V3.8a.75.75 0 0 0-.628-.716 8.035 8.035 0 0 0-4.872.604v7.61Z" />
                            </svg>
                            Read the docs
                        </a>
                    </div>

                    <p class="mt-5 text-xs text-zinc-400 dark:text-zinc-500">No credit card required · Free plan forever</p>

                    {{-- App mockup --}}
                    <div class="mx-auto mt-16 max-w-5xl">
                        <div class="rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-zinc-50 dark:bg-zinc-900 shadow-2xl shadow-zinc-900/10 dark:shadow-black/50 overflow-hidden">
                            <div class="flex items-center gap-1.5 border-b border-zinc-200 dark:border-zinc-800 px-4 py-3 bg-white dark:bg-zinc-900">
                                <div class="size-3 rounded-full bg-red-400"></div>
                                <div class="size-3 rounded-full bg-yellow-400"></div>
                                <div class="size-3 rounded-full bg-green-400"></div>
                                <div class="mx-auto text-xs text-zinc-400 font-mono">app.example.com/dashboard</div>
                            </div>
                            <div class="aspect-video bg-gradient-to-br from-zinc-100 to-zinc-200 dark:from-zinc-800 dark:to-zinc-900 flex items-center justify-center">
                                <div class="grid grid-cols-3 gap-4 p-8 w-full max-w-2xl">
                                    @foreach ([['Total Users', '24,521', '+12%'], ['Revenue', '$48,290', '+8%'], ['Active Sessions', '1,204', '+3%']] as [$label, $value, $change])
                                        <div class="rounded-xl bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 p-4 text-left">
                                            <p class="text-xs text-zinc-500 dark:text-zinc-400 mb-1">{{ $label }}</p>
                                            <p class="text-xl font-bold text-zinc-900 dark:text-white">{{ $value }}</p>
                                            <p class="text-xs text-green-600 mt-1 font-medium">{{ $change }} this month</p>
                                        </div>
                                    @endforeach
                                    <div class="col-span-3 rounded-xl bg-white dark:bg-zinc-800 border border-zinc-200 dark:border-zinc-700 p-4">
                                        <p class="text-xs text-zinc-500 dark:text-zinc-400 mb-3">Activity</p>
                                        <div class="flex items-end gap-1 h-12">
                                            @foreach ([40, 65, 45, 80, 55, 90, 70, 85, 60, 95, 75, 100] as $height)
                                                <div class="flex-1 rounded-t bg-violet-200 dark:bg-violet-800/60" style="height: {{ $height }}%"></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Social proof / Stats --}}
            <section class="border-y border-zinc-100 dark:border-zinc-800/50 py-12 bg-zinc-50/50 dark:bg-zinc-900/20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        @foreach ([['10,000+', 'Developers'], ['99.9%', 'Uptime SLA'], ['< 50ms', 'Avg. Response'], ['4.9/5', 'Customer Rating']] as [$stat, $label])
                            <div>
                                <p class="text-3xl font-bold text-zinc-900 dark:text-white">{{ $stat }}</p>
                                <p class="mt-1 text-sm text-zinc-500 dark:text-zinc-400">{{ $label }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Features --}}
            <section id="features" class="py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center mb-16">
                        <p class="text-sm font-semibold text-violet-600 dark:text-violet-400 uppercase tracking-wide mb-3">Everything you need</p>
                        <h2 class="text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">Stop building plumbing.<br>Start shipping features.</h2>
                        <p class="mt-4 text-lg text-zinc-500 dark:text-zinc-400">Everything you'd spend weeks building is already here — production-ready and beautifully designed.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ([
                            ['Authentication', 'Login, register, password reset, email verification, and two-factor auth — all wired up and ready to go.', 'M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 0 1 21.75 8.25Z', 'violet'],
                            ['Billing & Subscriptions', 'Stripe integration with subscription plans, usage-based billing, invoices, and a customer portal out of the box.', 'M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z', 'cyan'],
                            ['Teams & Permissions', 'Invite team members, assign roles, and control access with a flexible permission system built on Laravel policies.', 'M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z', 'emerald'],
                            ['Beautiful UI Components', 'A complete component library with Flux UI — buttons, forms, modals, tables, and more. Dark mode included.', 'M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42', 'amber'],
                            ['API Ready', 'RESTful API with versioning, Sanctum token auth, rate limiting, and auto-generated OpenAPI documentation.', 'M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5', 'rose'],
                            ['Observability', 'Built-in error tracking, performance monitoring, query insights, and real-time logs with Laravel Pail.', 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z', 'blue'],
                        ] as [$title, $description, $iconPath, $color])
                            <div class="group relative rounded-2xl border border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-900 p-8 hover:border-zinc-300 dark:hover:border-zinc-700 hover:shadow-lg hover:shadow-zinc-900/5 transition-all duration-200">
                                <div class="mb-5 inline-flex size-12 items-center justify-center rounded-xl
                                    @if($color === 'violet') bg-violet-50 dark:bg-violet-950/50 text-violet-600 dark:text-violet-400
                                    @elseif($color === 'cyan') bg-cyan-50 dark:bg-cyan-950/50 text-cyan-600 dark:text-cyan-400
                                    @elseif($color === 'emerald') bg-emerald-50 dark:bg-emerald-950/50 text-emerald-600 dark:text-emerald-400
                                    @elseif($color === 'amber') bg-amber-50 dark:bg-amber-950/50 text-amber-600 dark:text-amber-400
                                    @elseif($color === 'rose') bg-rose-50 dark:bg-rose-950/50 text-rose-600 dark:text-rose-400
                                    @elseif($color === 'blue') bg-blue-50 dark:bg-blue-950/50 text-blue-600 dark:text-blue-400
                                    @endif">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $iconPath }}" />
                                    </svg>
                                </div>
                                <h3 class="text-base font-semibold text-zinc-900 dark:text-white mb-2">{{ $title }}</h3>
                                <p class="text-sm text-zinc-500 dark:text-zinc-400 leading-relaxed">{{ $description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- Pricing --}}
            <section id="pricing" class="py-24 sm:py-32 bg-zinc-50 dark:bg-zinc-900/30">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center mb-16">
                        <p class="text-sm font-semibold text-violet-600 dark:text-violet-400 uppercase tracking-wide mb-3">Simple pricing</p>
                        <h2 class="text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">Pay for what you use</h2>
                        <p class="mt-4 text-lg text-zinc-500 dark:text-zinc-400">Start free, scale when ready. No hidden fees or surprises.</p>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
                        @foreach ([
                            ['Starter', 'Free', null, 'Perfect for side projects and experimenting.', ['Up to 3 projects', '5 team members', '10GB storage', 'Community support'], false],
                            ['Pro', '$29', '/month', 'For professional developers and growing teams.', ['Unlimited projects', '25 team members', '100GB storage', 'Priority email support', 'Advanced analytics', 'Custom domains'], true],
                            ['Team', '$99', '/month', 'For organizations that need more power and control.', ['Everything in Pro', 'Unlimited members', '1TB storage', 'Dedicated support', 'SLA guarantee', 'SSO & audit logs'], false],
                        ] as [$name, $price, $period, $description, $features, $featured])
                            <div class="relative rounded-2xl
                                {{ $featured ? 'bg-zinc-900 dark:bg-white border-zinc-900 dark:border-white ring-2 ring-zinc-900 dark:ring-white shadow-2xl shadow-zinc-900/25' : 'bg-white dark:bg-zinc-900 border-zinc-200 dark:border-zinc-800' }}
                                border p-8">
                                @if ($featured)
                                    <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                                        <span class="inline-flex items-center rounded-full bg-violet-600 px-4 py-1 text-xs font-semibold text-white">Most popular</span>
                                    </div>
                                @endif

                                <h3 class="text-base font-semibold {{ $featured ? 'text-zinc-300' : 'text-zinc-500 dark:text-zinc-400' }}">{{ $name }}</h3>
                                <div class="mt-4 flex items-baseline gap-1">
                                    <span class="text-5xl font-bold {{ $featured ? 'text-white dark:text-zinc-900' : 'text-zinc-900 dark:text-white' }}">{{ $price }}</span>
                                    @if ($period)
                                        <span class="text-sm {{ $featured ? 'text-zinc-400' : 'text-zinc-500 dark:text-zinc-400' }}">{{ $period }}</span>
                                    @endif
                                </div>
                                <p class="mt-3 text-sm {{ $featured ? 'text-zinc-400' : 'text-zinc-500 dark:text-zinc-400' }}">{{ $description }}</p>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="mt-8 block w-full rounded-xl py-3 text-center text-sm font-semibold transition-colors
                                        {{ $featured
                                            ? 'bg-white dark:bg-zinc-900 text-zinc-900 dark:text-white hover:bg-zinc-100 dark:hover:bg-zinc-800'
                                            : 'bg-zinc-900 dark:bg-white text-white dark:text-zinc-900 hover:bg-zinc-700 dark:hover:bg-zinc-100' }}">
                                        Get started
                                    </a>
                                @endif

                                <ul class="mt-8 space-y-3">
                                    @foreach ($features as $feature)
                                        <li class="flex items-center gap-3 text-sm {{ $featured ? 'text-zinc-300' : 'text-zinc-600 dark:text-zinc-400' }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4 shrink-0 {{ $featured ? 'text-violet-400' : 'text-violet-600 dark:text-violet-400' }}">
                                                <path fill-rule="evenodd" d="M12.416 3.376a.75.75 0 0 1 .208 1.04l-5 7.5a.75.75 0 0 1-1.154.114l-3-3a.75.75 0 0 1 1.06-1.06l2.353 2.353 4.493-6.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                                            </svg>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            {{-- CTA --}}
            <section class="py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">Ready to ship faster?</h2>
                        <p class="mt-4 text-lg text-zinc-500 dark:text-zinc-400">Join thousands of developers building their next project with {{ config('app.name') }}.</p>
                        <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="inline-flex items-center gap-2 rounded-xl bg-zinc-900 dark:bg-white px-8 py-3.5 text-sm font-semibold text-white dark:text-zinc-900 hover:bg-zinc-700 dark:hover:bg-zinc-100 transition-colors shadow-lg shadow-zinc-900/10">
                                    Create your free account
                                </a>
                            @endif
                            <a href="https://laravel.com/docs" target="_blank" class="text-sm font-medium text-zinc-500 dark:text-zinc-400 hover:text-zinc-900 dark:hover:text-white transition-colors">
                                Read the documentation →
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        {{-- Footer --}}
        <footer class="border-t border-zinc-200 dark:border-zinc-800 py-12 bg-zinc-50 dark:bg-zinc-900/20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-2">
                        <div class="flex aspect-square size-7 items-center justify-center rounded-md bg-zinc-900 dark:bg-white">
                            <x-app-logo-icon class="size-4 fill-current text-white dark:text-zinc-900" />
                        </div>
                        <span class="text-sm font-semibold text-zinc-900 dark:text-white">{{ config('app.name') }}</span>
                    </div>

                    <div class="flex items-center gap-6 text-sm text-zinc-500 dark:text-zinc-400">
                        <a href="#features" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Features</a>
                        <a href="#pricing" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Pricing</a>
                        <a href="https://laravel.com/docs" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Docs</a>
                        <a href="https://laravel.com" target="_blank" class="hover:text-zinc-900 dark:hover:text-white transition-colors">Laravel</a>
                    </div>

                    <p class="text-sm text-zinc-400 dark:text-zinc-500">
                        &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                    </p>
                </div>
            </div>
        </footer>

    </body>
</html>
