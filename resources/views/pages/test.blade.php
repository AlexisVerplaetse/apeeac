<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <div x-data="{
        activeSection: 'introduction',
        sections: [
            { id: 'introduction', title: 'Introduction', icon: '📘' },
            { id: 'processus', title: 'Le processus d\'élection des représentants des parents d\'élèves', icon: '🗳️' },
            { id: 'participation', title: 'Participation des parents', icon: '👥' },
            { id: 'role', title: 'Le rôle des représentants des parents d\'élèves', icon: '👔' },
            { id: 'groupements', title: 'Les principaux groupements d\'associations de parents d\'élèves', icon: '🏢' },
            { id: 'conclusion', title: 'Conclusion', icon: '✅' }
        ],
        content: {
            introduction: {
                title: 'Introduction',
                subtitle: 'L\'implication des parents',
                text: 'L\'implication des parents dans l\'éducation de qualité est essentielle à la vie scolaire. Les parents peuvent être représentants. Cette page présente le conseil d\'administration pour mieux comprendre les élèves.'
            },
            processus: {
                title: 'Le processus d\'élection',
                subtitle: 'Modalités et organisation',
                text: 'Les élections des représentants des parents d\'élèves se déroulent chaque année en début d\'année scolaire. Tous les parents sont électeurs et éligibles.'
            },
            participation: {
                title: 'Participation des parents',
                subtitle: 'Engagement dans la vie scolaire',
                text: 'La participation des parents est fondamentale pour la réussite éducative. Elle se manifeste à travers différentes instances et actions au sein de l\'établissement.'
            },
            role: {
                title: 'Le rôle des représentants',
                subtitle: 'Au sein du conseil',
                text: 'Les représentants des parents ont une responsabilité essentielle au sein du conseil d\'école, et d\'autres instances. Ils participent aux décisions concernant les mesures qui touchent la vie périscolaire, l\'information des parents... En outre, les représentants jouent un rôle de médiateurs et facilitent la communication entre les familles et l\'école dans les décisions importantes.'
            },
            groupements: {
                title: 'Les principaux groupements',
                subtitle: 'Associations de parents d\'élèves',
                text: 'Plusieurs fédérations nationales regroupent les associations de parents d\'élèves. Elles défendent les intérêts des familles et participent au dialogue éducatif.'
            },
            conclusion: {
                title: 'Conclusion',
                subtitle: 'Synthèse',
                text: 'La représentation des parents d\'élèves est un pilier essentiel du système éducatif français, garantissant un dialogue constructif entre toutes les parties prenantes.'
            }
        }
    }" class="flex h-screen bg-gray-50">
        
        <!-- Navigation latérale -->
        <div class="w-80 bg-white border-r border-gray-200 overflow-y-auto">
            <div class="p-6">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white text-2xl">📄</span>
                    </div>
                    <h2 class="ml-3 text-lg font-semibold text-gray-800">
                        Sommaire du document
                    </h2>
                </div>
 
                <nav class="space-y-1">
                    <template x-for="section in sections" :key="section.id">
                        <button
                            @click="activeSection = section.id"
                            :class="activeSection === section.id ? 
                                'bg-blue-100 text-blue-700 font-medium shadow-sm' : 
                                'text-gray-700 hover:bg-gray-100'"
                            class="w-full text-left px-4 py-3 rounded-lg transition-all duration-200 flex items-start"
                        >
                            <span class="text-xl mr-3 mt-0.5" x-text="section.icon"></span>
                            <span class="flex-1 text-sm leading-relaxed" x-text="section.title"></span>
                            <span x-show="activeSection === section.id" class="text-blue-500 ml-2">▶</span>
                        </button>
                    </template>
                </nav>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="flex-1 overflow-y-auto">
            <div class="max-w-4xl mx-auto p-12">
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                    <h1 class="text-3xl font-bold text-gray-900 mb-2" x-text="content[activeSection].title"></h1>
                    <h2 class="text-xl text-blue-600 mb-6" x-text="content[activeSection].subtitle"></h2>
                    <div class="prose prose-lg text-gray-700 leading-relaxed">
                        <p x-text="content[activeSection].text"></p>
                    </div>

                    <!-- Navigation entre sections -->
                    <div class="flex justify-between mt-8 pt-6 border-t border-gray-200">
                        <button
                            @click="activeSection = sections[sections.findIndex(s => s.id === activeSection) - 1]?.id"
                            :disabled="sections.findIndex(s => s.id === activeSection) === 0"
                            class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 disabled:opacity-30 disabled:cursor-not-allowed"
                        >
                            ← Section précédente
                        </button>
                        <button
                            @click="activeSection = sections[sections.findIndex(s => s.id === activeSection) + 1]?.id"
                            :disabled="sections.findIndex(s => s.id === activeSection) === sections.length - 1"
                            class="px-4 py-2 text-sm font-medium text-gray-600 hover:text-gray-900 disabled:opacity-30 disabled:cursor-not-allowed"
                        >
                            Section suivante →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>