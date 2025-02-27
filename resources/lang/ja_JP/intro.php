<?php

/**
 * intro.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    // index
    'index_intro'                                     => 'Firefly IIIのインデックスページへようこそ。このイントロダクションでは、Firefly IIIがどのように機能するのかをご紹介します。',
    'index_accounts-chart'                            => 'このチャートは、お客様の資産口座の現在の残高を表示しています。お客様のご希望でここに表示するかどうか選択できます。',
    'index_box_out_holder'                            => 'この小さな吹き出しとこの横にある吹き出しは収支状況の概要を表示しています。',
    'index_help'                                      => 'ページや入力欄について助けが必要なら、このボタンを押して下さい。',
    'index_outro'                                     => 'Firefly IIIの多くのページはこのような小さなツアーから始まります。もし質問やコメントがある場合は、私に連絡して下さい。楽しんで！',
    'index_sidebar-toggle'                            => '新しい取引やアカウントなどを作成するには、このアイコン下のメニューを使用して下さい。',
    'index_cash_account'                              => 'これらは今までに作られたアカウントです。現金支出を管理するため現金アカウントを使うこともできますが、もちろん強制ではありません。',

    // transactions
    'transactions_create_basic_info'                  => '貸方、借方、日付、説明など、取引の基本情報を入力します。',
    'transactions_create_amount_info'                 => '取引の金額を入力します。必要に応じて、フィールドは自動的に更新されます。',
    'transactions_create_optional_info'               => 'これらのフィールドはすべて任意です。ここにメタデータを追加すると、取引をより整理できます。',
    'transactions_create_split'                       => '取引を分割する場合は、このボタンでさらに分割を追加します',

    // create account:
    'accounts_create_iban'                            => 'あなたのアカウントには有効なIBANを設定してください。これは将来のデータインポートをとても簡単にします。',
    'accounts_create_asset_opening_balance'           => '経費勘定はFirefly IIIでのこのアカウントの始まりを示す"期首残高"を持っているかもしれません。',
    'accounts_create_asset_currency'                  => 'Firefly IIIは複数の通貨をサポートしています。経費勘定は一つの主通貨を持っており、あなたはここでそれを選択する必要があります。',
    'accounts_create_asset_virtual'                   => 'あなたのアカウントに仮想の残高を与えることはしばしば助けになるかもしれません: 余剰は常に実際の残高から差し引かれます。',

    // budgets index
    'budgets_index_intro'                             => '予算はあなたの財源を管理するために使用され、Firefly IIIの一つの主要機能を構成します。',
    'budgets_index_set_budget'                        => 'Firefly IIIがあなたが割り当て可能なすべての金額を予算計上したかどうか伝えられるように。あなたの毎期間の合計予算を設定してください。',
    'budgets_index_see_expenses_bar'                  => '消費した金額が少しずつこのバーを埋めます。',
    'budgets_index_navigate_periods'                  => '期間を操作することで、予算を事前に簡単に設定できます。',
    'budgets_index_new_budget'                        => 'あなたが妥当だと考える新しい予算を設定してください。',
    'budgets_index_list_of_budgets'                   => '各予算の金額を設定したり自分の行っていることを確認するためにこの表を使ってください。',
    'budgets_index_outro'                             => '予算計上についてもっと知るには、右上のヘルプアイコンを確認してください。',

    // reports (index)
    'reports_index_intro'                             => 'あなたの財務状況の詳細を見るにはこれらのレポートを使用してください。',
    'reports_index_inputReportType'                   => 'レポートの種類を選択してください。それぞれのレポートが何を表示するかを見るにはヘルプページを確認してください。',
    'reports_index_inputAccountsSelect'               => '経費勘定の除外や追加は自由に行えます。',
    'reports_index_inputDateRange'                    => '選択した日付の範囲は、1日から10年まで自由に設定できます。',
    'reports_index_extra-options-box'                 => 'あなたが選んだレポートに応じて、追加のフィルターやオプションを選択できます。',

    // reports (reports)
    'reports_report_default_intro'                    => 'このレポートはあなたの財務状況の素早く包括的な概要を表示します。他の何かを表示したい場合、私に連絡することをためらわないでください！',
    'reports_report_audit_intro'                      => 'このレポートはあなたの経費勘定の詳細を表示します。',
    'reports_report_audit_optionsBox'                 => 'あなたが興味のある列を表示したり隠したりするにはこれらのチェックボックスを使用してください。',

    'reports_report_category_intro'                  => 'このレポートは一つまたは複数のカテゴリーの見通しを表示します。',
    'reports_report_category_pieCharts'              => 'これらの図表は支出の見通しやカテゴリ、勘定ごとの収入を表示します。',
    'reports_report_category_incomeAndExpensesChart' => 'この図表はカテゴリーごとのあなたの支出と収入を表示します。',

    'reports_report_tag_intro'                  => 'このレポートはあなたの一つまたは複数のタグの見通しを表示します。',
    'reports_report_tag_pieCharts'              => 'これらのチャートはタグ、勘定、カテゴリ、予算ごとのあなたの支出と収入を表示しています。',
    'reports_report_tag_incomeAndExpensesChart' => 'このチャートはタグごとのあなたの支出と収入を表示しています。',

    'reports_report_budget_intro'                             => 'このレポートは、1つまたは複数の予算についての洞察を提供します。',
    'reports_report_budget_pieCharts'                         => 'これらのチャートは、予算ごとまたはアカウントごとの費用に関する洞察を提供します。',
    'reports_report_budget_incomeAndExpensesChart'            => 'このグラフは予算あたりの支出を示しています。',

    // create transaction
    'transactions_create_switch_box'                          => 'これらのボタンを使用して、保存したい取引の種類をすばやく切り替えます。',
    'transactions_create_ffInput_category'                    => 'このフィールドでは自由に入力できます。以前に作成したカテゴリが推奨されます。',
    'transactions_create_withdrawal_ffInput_budget'           => 'より良い財務管理のために、出金に予算を紐付けます。',
    'transactions_create_withdrawal_currency_dropdown_amount' => '出金が別の通貨の場合は、このドロップダウンを使用してください。',
    'transactions_create_deposit_currency_dropdown_amount'    => '入金が別の通貨である場合は、このドロップダウンを使用してください。',
    'transactions_create_transfer_ffInput_piggy_bank_id'      => '貯金箱を選択し、この送金をその貯金とします。',

    // piggy banks index:
    'piggy-banks_index_saved'                                 => 'この項目は、それぞれの貯金箱にどれだけ貯めたかを示しています。',
    'piggy-banks_index_button'                                => 'このプログレスバーの隣には、それぞれの貯金箱からお金を追加または削除する、2つのボタン(+と-) があります。',
    'piggy-banks_index_accountStatus'                         => 'この表には、ひとつ以上の貯金箱をもつ資産口座の状況が表示されています。',

    // create piggy
    'piggy-banks_create_name'                                 => 'あなたの目標は何ですか？ 新しいソファ、カメラ、もしもの時のお金ですか？',
    'piggy-banks_create_date'                                 => '貯金箱の目標日や期限を設定できます。',

    // show piggy
    'piggy-banks_show_piggyChart'                             => 'このグラフは、この貯金箱の経過を示しています。',
    'piggy-banks_show_piggyDetails'                           => 'あなたの貯金庫に関する詳細',
    'piggy-banks_show_piggyEvents'                            => 'すべての追加または削除もここにリストされています。',

    // bill index
    'bills_index_rules'                                       => 'ここでは、この請求がきたときに、どのルールが一致するか確認します。',
    'bills_index_paid_in_period'                              => 'この項目は、請求が最後に支払われた日を示します。',
    'bills_index_expected_in_period'                          => 'この項目は、それぞれの請求がくると予想されるか、その場合いつかを示します。',

    // show bill
    'bills_show_billInfo'                                     => 'この表はこの請求に関する一般情報を示しています。',
    'bills_show_billButtons'                                  => 'このボタンで、これまでの取引を再スキャンし、この請求にマッチさせます。',
    'bills_show_billChart'                                    => 'このチャートは、この請求書に紐づく取引を示しています。',

    // create bill
    'bills_create_intro'                                      => '請求を使って期間ごとに支払うべき金額を追跡します。家賃や保険、住宅ローンのような支出です。',
    'bills_create_name'                                       => '「家賃」や「健康保険」などのわかりやすい名称を使用してください。',
    //'bills_create_match'                                      => 'To match transactions, use terms from those transactions or the expense account involved. All words must match.',
    'bills_create_amount_min_holder'                          => 'この請求の最低額と最大額を選択してください。',
    'bills_create_repeat_freq_holder'                         => 'ほとんどの請求書は毎月の繰り返しですが、別の周期を設定することができます。',
    'bills_create_skip_holder'                                => '請求が2週ごとに繰り返される場合は、1週ごとに1週スキップするために、「スキップ」項目を「1」に設定してください。',

    // rules index
    'rules_index_intro'                                       => 'Firefly III ではルールを管理することができます。ルールは作成または編集する取引に自動的に適用されます。',
    'rules_index_new_rule_group'                              => 'グループ内のルールを組み合わせることで、管理が容易になります。',
    'rules_index_new_rule'                                    => '好きなだけルールを作ってください。',
    'rules_index_prio_buttons'                                => '適切と思う順に並び変えてください。',
    'rules_index_test_buttons'                                => 'ルールをテストしたり、既存のトランザクションに適用したりできます。',
    'rules_index_rule-triggers'                               => 'ルールには、ドラッグ＆ドロップで並べ替えできる「トリガー」と「アクション」があります。',
    'rules_index_outro'                                       => '右上の (?) アイコンからヘルプページを確認してください。',

    // create rule:
    'rules_create_mandatory'                                  => '説明的なタイトルを入力し、ルールが実行されるタイミングを設定します。',
    'rules_create_ruletriggerholder'                          => '好きなだけトリガーを追加してください。アクションが実行されるには全てトリガーが一致しなければならないことを覚えておいてください。',
    'rules_create_test_rule_triggers'                         => 'ルールに一致する取引を確認するには、このボタンを使用します。',
    'rules_create_actions'                                    => '好きなだけアクションを設定します。',

    // preferences
    'preferences_index_tabs'                                  => 'これらのタブには、より多くのオプションがあります。',

    // currencies
    'currencies_index_intro'                                  => 'Firefly III は複数の通貨をサポートしており、このページで変更できます。',
    'currencies_index_default'                                => 'Firefly IIIにはデフォルト通貨が1つあります。',
    'currencies_index_buttons'                                => 'これらのボタンを使用して、デフォルトの通貨を変更したり、他の通貨を有効にします。',

    // create currency
    'currencies_create_code'                                  => 'このコードはISOに準拠している必要があります(新しい通貨はググってください)。',
];
