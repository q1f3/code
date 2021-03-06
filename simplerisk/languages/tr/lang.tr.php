<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Ev',
    'RiskManagement'=>'Risk Yönetimi',
    'Reporting'=>'Raporlama',
    'Configure'=>'Yapılandırma',
    'MyProfile'=>'Profilim',
    'Logout'=>'Çıkış',
    'LogInHere'=>'Mantık-e doğru SimpleRisk',
    'Username'=>'Kullanıcı adı',
    'Password'=>'Şifre',
    'ForgotYourPassword'=>'Şifrenizi mi unuttunuz',
    'Login'=>'Giriş',
    'Reset'=>'Sıfırla',
    'Send'=>'Gönder',
    'Update'=>'Güncelleme',
    'SendPasswordResetEmail'=>'E-Posta Gönder Parola Sıfırlama',
    'PasswordReset'=>'Parola Sıfırlama',
    'ResetToken'=>'Token Sıfırlama',
    'RepeatPassword'=>'Şifre Tekrar',
    'Submit'=>'Gönder',
    'ProfileDetails'=>'Profil Ayrıntıları',
    'LastLogin'=>'Son Giriş',
    'ChangePassword'=>'Parolayı Değiştir',
    'CurrentPassword'=>'Geçerli Parola',
    'NewPassword'=>'Yeni Şifre',
    'ConfirmPassword'=>'Parolayı Onaylayın',
    'ConfigureRiskFormula'=>'Yapılandırmak Risk Formülü',
    'ConfigureReviewSettings'=>'Yapılandırma Ayarları Gözden Geçir',
    'AddAndRemoveValues'=>'Ekle ve Kaldır Değerleri',
    'UserManagement'=>'Kullanıcı Yönetimi',
    'RedefineNamingConventions'=>'Adlandırma Kuralları Tanımlayın',
    'AuditTrail'=>'Denetim İzi',
    'Extras'=>'Ekstralar',
    'Announcements'=>'Duyurular',
    'About'=>'Hakkında',
    'Impact'=>'Etkisi',
    'Likelihood'=>'Olabilirlik',
    'MitigationEffort'=>'Hafifletme Çabası',
    'Change'=>'Değiştirin',
    'to'=>'için',
    'AddANewUser'=>'Yeni bir Kullanıcı Ekle',
    'Type'=>'Yazın',
    'FullName'=>'Tam Adı',
    'EmailAddress'=>'E-posta Adresi',
    'Teams'=>'Takım(s)',
    'ALL'=>'TÜM',
    'NONE'=>'YOK',
    'UserResponsibilities'=>'Kullanıcı Sorumlulukları',
    'AbleToSubmitNewRisks'=>'Yeni Riskler Göndermek mümkün',
    'AbleToModifyExistingRisks'=>'Mevcut Riskler Değiştirmek mümkün',
    'AbleToCloseRisks'=>'Riskleri Kapatmak mümkün',
    'AbleToPlanMitigations'=>'Planlar Azaltıcı Etkenler',
    'AbleToReviewLowRisks'=>'Düşük Riskleri Gözden geçirmek mümkün',
    'AbleToReviewMediumRisks'=>'Mümkün İncelemesi için Orta Risk',
    'AbleToReviewHighRisks'=>'Yüksek Risk inceleyebilir',
    'AllowAccessToConfigureMenu'=>'Erişim izni ver "Yapılandırma" Menüsü',
    'MultiFactorAuthentication'=>'Çok Faktörlü Kimlik Doğrulama',
    'None'=>'Yok',
    'Add'=>'Ekle',
    'ViewDetailsForUser'=>'Kullanıcı Detaylarını görüntüleyin',
    'DetailsForUser'=>'Kullanıcı ayrıntıları',
    'Select'=>'Seçin',
    'EnableAndDisableUsers'=>'Etkinleştirmek ve Devre dışı Kullanıcılar',
    'EnableAndDisableUsersHelp'=>'Kullanıcı faaliyetlerinin denetim izi muhafaza ederken veya devre dışı bırakmak için Kullanıcı oturumları etkinleştirmek için bu özelliği kullanın',
    'DisableUser'=>'Devre dışı bırakmak kullanıcı',
    'Disable'=>'Devre dışı bırak',
    'EnableUser'=>'Kullanıcı etkinleştirin',
    'Enable'=>'Etkinleştir',
    'DeleteAnExistingUser'=>'Varolan bir Kullanıcı sil',
    'DeleteCurrentUser'=>'Sil geçerli kullanıcı',
    'Delete'=>'Sil',
    'SendPasswordResetEmailForUser'=>'Gönder şifre kullanıcının e-posta sıfırlama',
    'Category'=>'Kategori',
    'AddNewCategoryNamed'=>'Adlı yeni kategori Ekle',
    'DeleteCurrentCategoryNamed'=>'Sil geçerli kategori adında',
    'Team'=>'Takım',
    'AddNewTeamNamed'=>'Add new team adlı',
    'DeleteCurrentTeamNamed'=>'Sil geçerli team adlı',
    'Technology'=>'Teknoloji',
    'AddNewTechnologyNamed'=>'Ekle yeni teknoloji adlı',
    'DeleteCurrentTechnologyNamed'=>'Sil şu anki teknoloji adlı',
    'SiteLocation'=>'Site/Yer',
    'AddNewSiteLocationNamed'=>'Adlı yeni bir site/yer Ekle',
    'DeleteCurrentSiteLocationNamed'=>'Sil geçerli site/yer adlı',
    'ControlRegulation'=>'Kontrolü Yönetmeliği',
    'AddNewControlRegulationNamed'=>'Adlı yeni kontrol Yönetmeliği Ekle',
    'DeleteCurrentControlRegulationNamed'=>'Sil geçerli Kontrolü Yönetmeliği adında',
    'RiskPlanningStrategy'=>'Risk Strateji Planlama',
    'AddNewRiskPlanningStrategyNamed'=>'Ekle yeni risk planlama stratejisi adlı',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Sil mevcut risk planlama stratejisi adlı',
    'CloseReason'=>'Yakın Nedeni',
    'AddNewCloseReasonNamed'=>'Adlı yeni yakın nedeni ekleyin',
    'DeleteCurrentCloseReasonNamed'=>'Sil geçerli neden yakın adlı',
    'IWantToReviewHighRiskEvery'=>'Her YÜKSEK riskli gözden geçirmek istiyorum',
    'IWantToReviewMediumRiskEvery'=>'Her ORTA riskli gözden geçirmek istiyorum',
    'IWantToReviewLowRiskEvery'=>'Her DÜŞÜK risk gözden geçirmek istiyorum',
    'days'=>'gün',
    'MyClassicRiskFormulaIs'=>'Klasik Risk Formülü Benim',
    'RISK'=>'RİSK',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'YÜKSEK riskli bir şey daha görüyorum',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Daha ORTA riskli yukarıda daha az olduğunu düşünüyorum, ama daha büyük',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Daha DÜŞÜK risk, yukarıda daha az olduğunu düşünüyorum, ama daha büyük',
    'HighRisk'=>'Yüksek Risk',
    'MediumRisk'=>'Orta Risk',
    'LowRisk'=>'Düşük Risk',
    'Irrelevant'=>'Alakasız',
    'SubmitYourRisks'=>'Risk gönderin',
    'PlanYourMitigations'=>'Azaltma planı',
    'PerformManagementReviews'=>'Değerlendirme gerçekleştirmek',
    'PrioritizeForProjectPlanning'=>'Proje planlamak',
    'ReviewRisksRegularly'=>'Düzenli olarak gözden geçirin',
    'DocumentANewRisk'=>'Yeni bir Risk belge',
    'UseThisFormHelp'=>'Amacıyla Risk Yönetimi Sürecinin değerlendirilmesi için yeni bir risk belge için bu formu kullanın',
    'Subject'=>'Konu',
    'ExternalReferenceId'=>'Dış Referans NUMARASI',
    'ControlNumber'=>'Kontrol Numarası',
    'Owner'=>'Sahibi',
    'OwnersManager'=>'Kullanıcı Yöneticisi',
    'RiskScoringMethod'=>'Risk Puanlama Yöntemi',
    'CurrentLikelihood'=>'Güncel Olasılığını',
    'CurrentImpact'=>'Geçerli Etki',
    'RiskAssessment'=>'Risk Değerlendirmesi',
    'AdditionalNotes'=>'Ek Notlar',
    'UNREVIEWED'=>'İNCELENMEMİŞ',
    'PASTDUE'=>'VADESİ GEÇMİŞ',
    'ID'=>'KİMLİĞİ',
    'Status'=>'Durumu',
    'Risk'=>'Risk',
    'DaysOpen'=>'Gün Açık',
    'CalculatedRisk'=>'Hesaplanmış Risk',
    'SubmittedBy'=>'Ekleyen',
    'NextReviewDate'=>'Bir Sonraki Gözden Geçirme Tarihi',
    'CVSSRiskScoring'=>'CVSS Risk Puanlama',
    'DREADRiskScoring'=>'DEHŞET Risk Puanlama',
    'OWASPRiskScoring'=>'OWASP Risk Puanlama',
    'CustomRiskScoring'=>'Özel Risk Puanlama',
    'MitigationPlanningHelp'=>'Hafifletme planlama gerektiren gönderilen risklerin listesi aşağıdadır',
    'ManagementReviewHelp'=>'Yönetim bir inceleme gerektiren gönderilen risklerin listesi aşağıdadır',
    'Submitted'=>'Teslim',
    'MitigationPlanned'=>'Hafifletme Planlanan',
    'ManagementReview'=>'Yönetimin Gözden Geçirmesi',
    'No'=>'Hayır',
    'Yes'=>'Evet',
    'AddAndRemoveProjects'=>'Projeler eklemek ve Kaldırmak',
    'AddAndRemoveProjectsHelp'=>'Birlikte birden fazla risk ilişkilendirmek için önceliği için projeler eklemek ve kaldırmak',
    'AddNewProjectNamed'=>'Add new project adlı',
    'DeleteCurrentProjectNamed'=>'Sil mevcut proje isimli',
    'AddUnassignedRisksToProjects'=>'Projeler için Atanmamış Riskleri Ekle',
    'AddUnassignedRisksToProjectsHelp'=>'Sürükle ve bırak atanmamış risklerin değerlendirilmesi için bir proje olarak uygun proje sekmeyi işaretli',
    'PrioritizeProjects'=>'Öncelik Projeler',
    'PrioritizeProjectsHelp'=>'Projelerin etrafında hareket ve öncelik sırasını değiştirmek. Bitmiş bir kez, o "Update" düğmesine basın değişiklikleri kaydetmek için unutma',
    'SaveRisksToProjects'=>'Projeler için Riskleri Kaydet',
    'RiskId'=>'Risk NUMARASI',
    'RiskActions'=>'Eylemler',
    'ReopenRisk'=>'Risk Açın',
    'CloseRisk'=>'Yakın Risk',
    'EditRisk'=>'Riski Düzenle',
    'PlanAMitigation'=>'Plan bir Hafifletme',
    'PerformAReview'=>'Bir İnceleme gerçekleştirmek',
    'AddAComment'=>'Bir Yorum ekle',
    'ShowRiskScoringDetails'=>'Ayrıntılar puanlama Risk görüntüle',
    'HideRiskScoringDetails'=>'Risk Puanlama Detayları Gizle',
    'Details'=>'Detaylar',
    'SubmissionDate'=>'Gönderim Tarihi',
    'DateSubmitted'=>'Tarih Yapılmamış',
    'EditDetails'=>'Ayrıntıları Düzenle',
    'Mitigation'=>'Hafifletme',
    'MitigationDate'=>'Azaltma gönderme tarihi',
    'PlanningStrategy'=>'Planlama Stratejisi',
    'CurrentSolution'=>'Geçerli Bir Çözüm',
    'SecurityRequirements'=>'Güvenlik Gereksinimleri',
    'SecurityRecommendations'=>'Güvenlik Önerileri',
    'EditMitigation'=>'Edit Azaltma',
    'LastReview'=>'Son Gözden Geçirme',
    'ReviewDate'=>'İnceleme Tarih',
    'Reviewer'=>'İnceleme',
    'Review'=>'İnceleme',
    'NextStep'=>'Bir Sonraki Adım',
    'Comments'=>'Yorumlar',
    'ViewAllReviews'=>'Tüm Yorumları Görüntüle',
    'ReviewHistory'=>'İnceleme Tarihi',
    'Comment'=>'Yorum',
    'ClassicRiskScoring'=>'Klasik Risk Puanlama',
    'RiskScoringActions'=>'Risk Puanlama Eylemleri',
    'UpdateClassicScore'=>'Güncelleme Klasik Skor',
    'ScoreBy'=>'Skorla',
    'RISKClassicExp1'=>'( 2 Olasılık x Etki + (Etki) RİSK =)',
    'RISKClassicExp2'=>'( Olasılık x Etki + Etkisi ) = RİSK',
    'RISKClassicExp3'=>'RİSK = Olasılık x Etki )',
    'RISKClassicExp4'=>'( Olasılık x Etki + Olasılığı) = RİSK',
    'RISKClassicExp5'=>'(Olasılık) 2 = RİSK ( Olasılık x Etki +)',
    'Reason'=>'Nedeni',
    'CloseOutInformation'=>'Yakın Bilgi',
    'SubmitManagementReview'=>'Yönetim Yorum Gönder',
    'SubmitRiskMitigation'=>'Risk Azaltma Gönder',
    'RiskDashboard'=>'Risk Pano',
    'RiskTrend'=>'Risk Eğilimi',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Bana atanan tüm açık riskleri',
    'AllOpenRisksByRiskLevel'=>'Risk Düzeyi ile Açık olan tüm Riskleri',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Projeler için Risk tarafından Kabul tüm Açık Risk Düzeyi',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Açık olan tüm Riskleri bir Sonraki değerlendirmeye Kadar Risk Düzeyi Kabul',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Bütün Risklere Açık bir Üretim Sorunu olarak Risk Düzeyi ile Gönder',
    'AllOpenRisksByScoringMethod'=>'Tüm Açık Risk Puanlama Yöntemi',
    'AllClosedRisksByRiskLevel'=>'Risk Düzeyine göre tüm Kapalı Riskleri',
    'SubmittedRisksByDate'=>'Tarihe Göre Riskleri Yapılmamış',
    'MitigationsByDate'=>'Tarihe Göre Düzeltmeler',
    'ManagementReviewsByDate'=>'Yönetim Tarihe Yorumları',
    'ProjectsAndRisksAssigned'=>'Proje ve Risk Atanan',
    'OpenRisks'=>'Açık Riskleri',
    'ClosedRisks'=>'Kapalı Riskleri',
    'ReportMyOpenHelp'=>'Bu rapor risk sahibi veya yöneticisi olarak, geçerli kullanıcının sahip olduğu risk düzeyine göre emretti açık tüm riskleri gösterir',
    'ReportOpenHelp'=>'Bu rapor risk düzeyi tarafından sipariş edilen her şeyin açık riskleri gösterir',
    'ReportProjectsHelp'=>'Bu rapor risk düzeyi tarafından sipariş edilen projeleri için kabul açık tüm riskleri gösterir',
    'ReportNextReviewHelp'=>'Bu rapor risk düzeyi tarafından sipariş bir sonraki değerlendirme tarihine kadar kabul açık tüm riskleri gösterir',
    'ReportProductionIssuesHelp'=>'Bu rapor risk düzeyi tarafından sipariş üretim sorunları olarak sunulan tüm açık riskleri gösterir',
    'ReportRiskScoringHelp'=>'Bu rapor, tüm risk Puanlama yöntemleri gösterir ve riskleri her kullanarak attı',
    'ReportClosedHelp'=>'Bu rapor risk düzeyi tarafından sipariş edilen tüm kapalı riskleri gösterir',
    'ReportSubmittedByDateHelp'=>'Bu raporu tarihe göre sıralı tüm riskleri gösterir',
    'ReportMitigationsByDateHelp'=>'Bu rapor, tüm kolaylıkları azaltma tarihe göre sıralı planlanan',
    'ReportMgmtReviewsByDateHelp'=>'Bu rapor tüm yönetim Gözden Geçirme tarihe göre sıralı incelemeler gösteriyor',
    'ReportProjectsAndRisksHelp'=>'Bu rapor kendilerine verilen tüm projeler ve riskleri gösterir',
    'Language'=>'Dil',
    'AllOpenRisksNeedingReview'=>'Açık olan tüm Risklerin Gözden geçirilmesi Gerek',
    'ReportReviewNeededHelp'=>'Bu rapor, tüm açık risk yönetim Gözden Geçirme ihtiyacı gösterir',
    'CustomValue'=>'Özel Değer',
    'ClosedRisksByDate'=>'Tarihe Göre Kapalı Riskleri',
    'DateClosed'=>'Tarih Kapalı',
    'ClosedBy'=>'Kapalı Tarafından',
    'ReportClosedByDateHelp'=>'Bu rapor, kapanış tarihine göre sıralı tüm riskleri gösterir',
    'AllOpenRisksByTeam'=>'Ekip tarafından tüm Açık Riskleri',
    'ReportRiskTeamsHelp'=>'Bu rapor, her atanan tüm takımlar ve riskleri gösterir',
    'Unassigned'=>'Atanmamış',
    'AllOpenRisksByTechnology'=>'Teknoloji İle Tüm Açık Riskleri',
    'ReportRiskTechnologiesHelp'=>'Bu rapor, her atanan tüm teknolojileri ve riskleri gösterir',
    'RiskLevel'=>'Risk Düzeyi',
    'BasedOnTheCurrentRiskScore'=>'Risk puanınızı dayalı,-ecek var olmak senin sonraki gözden geçirme tarihi ',
    'WouldYouLikeToUseADifferentDate'=>'Bunun yerine farklı bir tarih kullanmak ister misiniz?',
    'RisksOpenedAndClosedOverTime'=>'Riskler Zaman İçinde açık ve Kapalı',
    'AllRiskScoresAreAdjusted'=>'Tüm risk puanları 1-12 bir ölçekte uygun şekilde ayarlanır.',
    'DetermineProjectStatus'=>'Proje Durumunu Belirlemek',
    'ProjectStatusHelp'=>'Yer mevcut durumlarına göre kova içine projeleri.',
    'ActiveProjects'=>'Aktif Proje',
    'OnHoldProjects'=>'Bekle Projeler',
    'CompletedProjects'=>'Tamamlanan Projeler',
    'CancelledProjects'=>'İptal Edilen Projeler',
    'UpdateProjectStatuses'=>'Güncelleme Proje Durumları',
    'HighRiskReport'=>'Yüksek Risk Raporu',
    'TotalOpenRisks'=>'Toplam Açık Riskleri',
    'TotalHighRisks'=>'Toplam Yüksek Risk',
    'HighRiskPercentage'=>'Yüksek Risk Yüzdesi',
    'UpdateClassicScore'=>'Klasik skor güncelleme',
    'CurrentLikelihood'=>'Geçerli olasılığı',
    'CurrentImpact'=>'Geçerli etkisi',   
    'UpdateCVSSScore'=>'Güncelleme CVSS Skoru',
    'BaseScoreMetrics'=>'Taban Puanı Ölçütleri',
    'AttackVector'=>'Saldırı Vektör',
    'AttackComplexity'=>'Saldırı Karmaşıklığı',
    'Authentication'=>'Kimlik doğrulama',
    'ConfidentialityImpact'=>'Gizlilik Etkisi',
    'IntegrityImpact'=>'Bütünlük Etkisi',
    'AvailabilityImpact'=>'Kullanılabilirlik Etkisi',
    'TemporalScoreMetrics'=>'Temporal Puanı Ölçütleri',
    'Exploitability'=>'Yararlanma',
    'RemediationLevel'=>'Düzeltme Düzeyi',
    'ReportConfidence'=>'Rapor Güven',
    'EnvironmentalScoreMetrics'=>'Çevre Ölçümleri Puan',
    'CollateralDamagePotential'=>'Potansiyel Hasar',
    'TargetDistribution'=>'Hedef Dağıtım',
    'ConfidentialityRequirement'=>'Gizlilik Gereği',
    'IntegrityRequirement'=>'Bütünlük Gereksinimi',
    'AvailabilityRequirement'=>'Kullanılabilirlik Gereksinimi',
    'UpdateDREADScore'=>'Güncelleme DEHŞET Puan',
    'DamagePotential'=>'Hasar Potansiyeli',
    'Reproducibility'=>'Göstermektedir',
    'AffectedUsers'=>'Etkilenen Kullanıcılar',
    'Discoverability'=>'Keşfedilebilirlik',
    'UpdateOWASPScore'=>'Güncelleme OWASP Puan',
    'ThreatAgentFactors'=>'Tehdit Ajan Faktörler',
    'SkillLevel'=>'Beceri Düzeyi',
    'Motive'=>'Sebebi',
    'Opportunity'=>'Fırsat',
    'Size'=>'Boyutu',
    'VulnerabilityFactors'=>'Güvenlik Faktörleri',
    'EaseOfDiscovery'=>'Bulma kolaylığı',
    'EaseOfExploit'=>'Kolaylığı İstismar',
    'Awareness'=>'Farkındalık',
    'IntrusionDetection'=>'Saldırı Tespit',
    'TechnicalImpact'=>'Teknik Etki',
    'LossOfConfidentiality'=>'Gizlilik kaybı',
    'LossOfIntegrity'=>'Bütünlük kaybı',
    'LossOfAvailability'=>'Kullanılabilirlik kaybı',
    'LossOfAccountability'=>'Hesap kaybı',
    'BusinessImpact'=>'İş Etki',
    'FinancialDamage'=>'Maddi Hasar',
    'ReputationDamage'=>'Şöhretine',
    'NonCompliance'=>'Uygunsuzluk',
    'PrivacyViolation'=>'Gizlilik İhlali',
    'UpdateCustomScore'=>'Güncelleme Özel Puan',
    'ManuallyEnteredValue'=>'Elle Girilen Değer',
    'ScoreByClassic'=>'Skora göre Klasik',
    'ScoreByCVSS'=>'CVSS puan',
    'ScoreByDREAD'=>'Skora göre DEHŞET',
    'ScoreByOWASP'=>'OWASP puan',
    'ScoreByCustom'=>'Özel puan',
    'BaseVector'=>'Temel Vektör',
    'TemporalVector'=>'Temporal Vektör',
    'EnvironmentalVector'=>'Çevre Vektör',
    'SupportingDocumentation'=>'Destek Belgeleri',
    'Import'=>'Al',
    'Export'=>'İhracat',
    'ActivateTheImportExportExtra'=>'Ekstra İthalat/İhracat etkinleştirmek',
    'PrintableView'=>'Yazdırılabilir Görünüm',
    'GroupBy'=>'Grup Tarafından',
    'IncludedColumns'=>'Sütunlar',
    'AllRisks'=>'Tüm Riskleri',
    'DynamicRiskReport'=>'Dinamik Risk Raporu',
    'ObsoleteReports'=>'Eski Raporları',
    'Project'=>'Proje',
    'SortBy'=>'Sırala',
    'MonthSubmitted'=>'Ay Sunulan',
    'AssetManagement'=>'Varlık Yönetimi',
    'AutomatedDiscovery'=>'Otomatik Bulma',
    'BatchImport'=>'Toplu İthalat',
    'ManageAssets'=>'Yönetmek Varlıkları',
    'AssetValuation'=>'Varlık Değerleme',
    'AllowAccessToAssetManagementMenu'=>'"Varlık Yönetimi" Menüsüne Erişim sağlar',
    'AutomatedDiscoveryHelp'=>'Girilen IP aralığındaki tüm IP adresleri canlı keşfedin. Canlı IP adresleri demirbaş listesine eklenir. Kabul edilebilir biçimleri:',
    'IPRange'=>'IP Aralığı',
    'Search'=>'Arama',
    'AddANewAsset'=>'Yeni bir Varlık ekleyin',
    'DeleteAnExistingAsset'=>'Varolan bir Varlık sil',
    'AssetName'=>'Varlığın Adı',
    'IPAddress'=>'IP Adresi',
    'AssetWasAddedSuccessfully'=>'Varlık başarıyla eklendi.',
    'AssetWasDeletedSuccessfully'=>'Varlık başarıyla silindi.',
    'ThereWasAProblemAddingTheAsset'=>'Varlığın ekleyerek bir sorun vardı.',
    'ThereWasAProblemDeletingTheAsset'=>'Varlık Silme bir sorun vardı.',
    'ComingSoon'=>'Yakında',
    'ExportRisks'=>'İhracat Riskleri',
    'ExportMitigations'=>'İhracat Azaltıcı Etkenler',
    'ExportReviews'=>'İhracat Yorumları',
    'ExportCombined'=>'İhracat Kombine',
    'MitigatedBy'=>'Hafifletilmiş Tarafından',
    'MitigationId'=>'Hafifletme NUMARASI',
    'ReviewId'=>'İnceleme İD',
    'AffectedAssets'=>'Etkilenen Varlıklar',
    'Activate'=>'Etkinleştirmek',
    'DeleteRisks'=>'Sil Riskleri',
    'DeletedRisksCannotBeRecovered'=>'Silinmiş Riskleri Kurtarılamaz',
    'RisksDeletedSuccessfully'=>'(S) Risk Başarıyla Silindi',
    'ThereWasAProblemDeletingTheRisk'=>'(S)Risk Silme bir Sorun oluştu',
    'Activated'=>'AKTİF',
    'IWantToReviewInsignificantRiskEvery'=>'Her ÖNEMSİZ risk gözden geçirmek istiyorum',
    'Insignificant'=>'Önemsiz',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'ÇOK riskli bir şey daha görüyorum',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Daha YÜKSEK risk yukarıda daha az olduğunu düşünüyorum, ama daha büyük',
    'VeryHigh'=>'Çok Yüksek',
    'VeryHighRisk'=>'Çok Yüksek Risk',
    'IWantToReviewVeryHighRiskEvery'=> 'Her ÇOK YÜKSEK risk gözden geçirmek istiyorum',
    'AbleToReviewVeryHighRisks'=>'İnceleme olanağınız Çok Yüksek Risk',
    'AbleToReviewInsignificantRisks'=>'Önemsiz Riskler Gözden geçirmek mümkün',
    'TotalVeryHighRisks'=>'Toplam Çok Yüksek Risk',
    'VeryHighRiskPercentage'=>'Çok Yüksek Risk Yüzdesi',
    'AllTeams'=>'Tüm Takımlar',
    'FileUploadSettings'=>'Yükleme Ayarları Dosyası',
    'AllowedFileTypes'=>'İzin Verilen Dosya Türleri',
    'AddNewFileTypeOf'=>'Yeni dosya türü Ekle',
    'DeleteCurrentFileTypeOf'=>'Silmek, geçerli dosya türü',
    'MaximumUploadFileSize'=>'Maksimum Dosya Yükleme Boyutu',
    'Bytes'=>'Bayt',
    'CheckAll'=>'Tüm Kontrol',
    'CheckAllRiskMgmt'=>'Tüm Risk Yönetimi Kontrol',
    'CheckAllAssetMgmt'=>'Bütün Varlık Yönetimi Kontrol',
    'CheckAllConfigure'=>'Tüm Yapılandırma Kontrol Edin',
    'MitigationTeam'=>'Hafifletme Ekibi',
    'ImportRisks'=>'Alma Riskleri',
    'ImportAssets'=>'İthalat Varlıklar',
    'AssetValue'=>'Varlık Değeri',
    'Register'=>'Kayıt',
    'RegisterSimpleRisk'=>'Kayıt SimpleRisk',
    'RegistrationText'=>'SimpleRisk kaydederek yani en son sürüm bilgileri ve önemli güvenlik uyarıları ile güncel olması size iletişim bilgilerinizi temin edilecektir. Bilgileriniz asla üçüncü bir şahsa satılacaktır. Kayıtlı örneklerini de yedeklenir ve bir düğmeye tıklama ile yükseltilmesi için yeteneği var.',
    'RegistrationInformation'=>'Kayıt Bilgileri',
    'Company'=>'Şirket',
    'JobTitle'=>'İş Unvanı',
    'Phone'=>'Telefon',
    'UpgradeSimpleRisk'=>'Yükseltme SimpleRisk',
    'UpgradeInstructions'=>'Bu bölüm Ekstra Yükseltme kullanır. Kayıt son sürümünü seçin ve "Update", yeniden olduğundan emin olun ve bu sayfayı yeniden yükleyin.',
    'NoUpgradeNeeded'=>'Hayır yükseltme şu anda gerekli.',
    'BackupDatabase'=>'Yedek Veritabanı',
    'UpgradeApplication'=>'Uygulama yükseltme',
    'UpgradeDatabase'=>'Veritabanı yükseltme',
    'CustomExtras'=>'Özel Ekstralar',
    'CustomExtrasText'=>'Eğer her şey bedava olsaydı, çok güzel olmaz mı? Umarım çekirdek SimpleRisk platformu risk yönetimi tüm ihtiyaçlarını hizmet edebilir. Ama, hala daha fazla işlevsellik isteyen kendinizi bulursanız, o zaman onu yapın "Ekstra" bir dizi geliştirdik.',
    'Upgrade'=>'Yükseltme',
    'Install'=>'Yükleme',
    'Purchase'=>'Satın alma',
    'PasswordPolicy'=>'Parola İlkesi',
    'MinimumNumberOfCharacters'=>'Minimum Karakter Sayısı',
    'RequireAlphaCharacter'=>'Alfa Karakter Gerektirir',
    'RequireUpperCaseCharacter'=>'Büyük Harf Karakter Gerektirir',
    'RequireLowerCaseCharacter'=>'Küçük Harf Karakter Gerektirir',
    'RequireNumericCharacter'=>'Sayısal Karakter Gerektirir',
    'RequireSpecialCharacter'=>'Gerektiren Özel Karakter',
    'Enabled'=>'Etkin',
    'RiskPyramid'=>'Risk Piramidi',
    'RiskPyramidDescription'=>'Yukarıdaki piramit risk riskin dağıtılması, çeşitli risk düzeyleri arasında göstermek için yardımcı olur. En ağır bir piramit organizasyon çok fazla risk alıyor Bu bir işaret olabilir.',
    'RiskAdvice'=>'Risk Tavsiyeler',
    'AddDeleteAssets'=>'Varlıkların Ekle & Sil',
    'EditAssets'=>'Edit Varlıklar',
    'AutomaticAssetValuation'=>'Otomatik Varlık Değerleme',
    'ManualAssetValuation'=>'Manuel Varlık Değerleme',
    'MinimumValue'=>'En Düşük Değer',
    'MaximumValue'=>'En Büyük Değer',
    'ValueRange'=>'Değer Aralığı',
    'DefaultAssetValuation'=>'Varsayılan Varlık Değerleme',
    'Default'=>'Varsayılan',
    'RisksAndAssets'=>'Riskler ve Varlıklar',
    'Report'=>'Rapor',
    'RisksByAsset'=>'Varlık tarafından riskler',
    'AssetsByRisk'=>'Varlıklar ile Riski',
    'MaximumQuantitativeLoss'=>'Maksimum Nicel Kaybı',
    'MitigationOwner'=>'Hafifletme Sahibi',
    'MitigationCost'=>'Azaltma Maliyeti',
    'RiskColumns'=>'Risk Sütunlar',
    'MitigationColumns'=>'Hafifletme Sütunlar',
    'ReviewColumns'=>'İnceleme Sütunlar',
    'ChangeStatus'=>'Durumu Değiştir',
    'SetRiskStatusTo'=>'Risk Durumunu Belirlemek',
    'AddNewStatusNamed'=>'Ekle yeni durumu adlı',
    'DeleteStatusNamed'=>'Silme durumu adlı',
    'DefaultCurrencySymbol'=>'Varsayılan Para Birimi Simgesi',
    'DefaultValues'=>'Varsayılan Değerler',
    'RiskSource'=>'Risk Kaynağı',
    'AddNewSourceNamed'=>'Add new kaynak adlı',
    'DeleteSourceNamed'=>'Sil kaynak adlı',
    'CheckAllAssessments'=>'Tüm Değerlendirmeler Kontrol Edin',
    'AllowAccessToAssessmentsMenu'=>'"Değerlendirme" Menüsüne Erişim sağlar',
    'Assessments'=>'Değerlendirmeler',
    'AvailableAssessments'=>'Mevcut Değerlendirmeler',
    'PendingRisks'=>'Bekleyen Riskler',
    'CreateAssessment'=>'Değerlendirme Oluşturun',
    'EditAssessment'=>'Edit Değerlendirme',
    'Overview'=>'Genel bakış',
    'OpenVsClosed'=>'Açık vs Kapalı',
    'MitigatedVsUnmitigated'=>'Hafifletilmiş vs Tam anlamıyla',
    'ReviewedVsUnreviewed'=>'Yapılmıştır vs İncelenmemiş',
    'OpenedRisks'=>'Açılan Riskleri',
    'MailSettings'=>'Posta Ayarları',
    'TransportAgent'=>'Taşıma Aracı',
    'FromName'=>'Adı',
    'FromEmail'=>'E-Posta',
    'ReplyToName'=>'ReplyTo Adı',
    'ReplyToEmail'=>'ReplyTo E-Posta',
    'Host'=>'Ana',
    'SMTPAuthentication'=>'SMTP kimlik Doğrulaması',
    'Encryption'=>'Şifreleme',
    'Port'=>'Bağlantı noktası',
    'Next'=>'Gelecek',
    'NewAssessmentQuestion'=>'Yeni Değerlendirme Soru',
    'Question'=>'Soru',
    'RiskScore'=>'Risk Skoru',
    'SubmitRisk'=>'Risk Gönder',
    'Answer'=>'Cevap',
    'AddQuestion'=>'Soru Ekleyebilirsiniz',
    'SaveAssessment'=>'Kaydet Değerlendirme',
    'SendAssessment'=>'Değerlendirmesi Gönder',
    'DeleteAssessment'=>'Silin Değerlendirme',
    'AssessmentName'=>'Değerlendirme Adı',
    'SendTo'=>'Gönder',
    'ActiveAssessments'=>'Aktif Değerlendirmeler',
    'SentTo'=>'Gönderildi',
    'From'=>'Gelen',
    'Key'=>'Anahtar',
    'GoToSSOLoginPage'=>'SSO giriş sayfasına git',
    'APIKey'=>'API anahtarı',
    'GenerateAPIKey'=>'API anahtarı oluşturmak',
    'RotateAPIKey'=>'API anahtarı Döndür',
    'InvalidateAPIKey'=>'API anahtarı geçersiz',
    'Deactivate'=>'Devre dışı bırakma',
    'ImportExportExtra'=>'Ekstra ithalat ve ihracat',
    'SaveDetails'=>'Ayrıntıları kaydetmek',
    'ClearForm'=>'Formu temizlemek',
    'SaveMitigation'=>'Azaltma kaydetmek',
    'Cancel'=>'İptal',
    'SubmitReview'=>'Gözden ekle',
    'UnassignedRisks'=>'Atanmamış riskleri',
    'DisableRegistrationNotice'=>'Kayıt bildirimi devre dışı bırak',
    'UserPolicy'=>'Kullanıcı ilkesi',
    'UseCaseSensitiveValidationOfUsername'=>'Büyük küçük harf duyarlı kullanıcı adı doğrulanmasını kullanın',
    'MitigationPlanning'=>'Planlanan azaltma tarihi',
    'AssetDetails'=>'Demirbaş ayrıntıları',
    'RiskList'=>'Risk listesi',
    'Are you sure you want to close the risk? All changes will be lost!'=>'Risk kapatmak istediğinizden emin misiniz? Tüm değişiklikler kaybolacak.',
    'MinimumPasswordAge' => 'En az parola geçerlilik süresi',
    'MaximumPasswordAge' => 'En fazla parola geçerlilik süresi',
    'MaximumAttemptsLockout' => 'Maksimum girişimleri kilitleme',
    'MaximumAttemptsLockoutTime' => 'Maksimum girişimleri kilitleme süresi',
    'attempts' => 'girişimleri',
    'minutes' => 'dakika',
    'AccountLockedOut' => 'Hesap kilitli',
    'AccountLockoutPolicy' => 'Hesap kilitleme ilkesi',
    'ImportExportIsDeactivated' => 'İthalat-ihracat devre dışı',
    'PurchaseTheExtra' => 'Ekstra satın',
    'ExpandAll' => 'Tümünü Genişlet',
    'ConditionMessageForMinChar' => 'Parola en az $min_chars karakter içermelidir.',
    'ConditionMessageForAlpha' => 'Parola alfa bir karakter içermelidir.',
    'ConditionMessageForUppercase' => 'Parola büyük harf karakter içermelidir.',
    'ConditionMessageForLowercase' => 'Şifre küçük harf karakteri içermelidir.',
    'ConditionMessageForDigit' => 'Parola bir basamak içermelidir.',
    'ConditionMessageForSpecialchar' => 'Parola özel bir karakter içermelidir.',
    'ConditionMessageForMinPasswordAge' => 'Parola son güncelleme üzerinden güncelleştirilebilir gün sonra $min_password_age en az zaman.',
    'TrustedDomains' => 'Güvenilen etki alanları',
    'SimpleRiskColumnMapping' => 'SimpleRisk sütun eşleme',
    'Mapping' => 'Eşleme',
    'Optional' => 'İsteğe bağlı',
    'SaveMappingAs' => 'Eşleme olarak kaydet',
    'EncryptionLevel' => 'Şifreleme düzeyi',
    'Level' => 'Düzeyi',
    'Description' => 'Açıklama',
    'ShowRiskScoreOverTime' => 'Zamanla risk puanı göster',
    'HideRiskScoreOverTime' => 'Zamanla risk puanı gizle',
    'ReviewRegularlyHelp' => 'Aşağıda tüm riskleri Unreviewed, vadesi geçmiş ve inceleme tarihine göre sıralanmış listesi bulunmaktadır',
    'RiskScoringHistory' => 'Geçmiş puanlama risk',
    'RiskAddPermissionMessage' => 'Yeni riskleri gönderme iznine sahip değil.  Gönderme girişiminde herhangi bir risk kaydedilmez.  Bu iletide hata ulaştınız düşünüyorsanız lütfen yöneticiye başvurun.',
    'SubjectRiskCannotBeEmpty' => 'Bir risk konusunu boş olamaz',
    'InvalidRiskID' => 'Geçersiz Risk Kimliği',
    'Success' => 'Başarı',
    'RiskUpdatePermissionMessage' => 'Riskleri değiştirme izni yok.  Değiştirme girişiminde herhangi bir risk kaydedilmez.  Bu iletide hata ulaştınız düşünüyorsanız lütfen yöneticiye başvurun.',
    'RiskReviewPermission' => '$risk_level düzey riskleri gözden geçirmek için izniniz yok.  Gönderme girişiminde herhangi bir değerlendirme kaydedilmez.  Bu iletide hata ulaştınız düşünüyorsanız lütfen yöneticiye başvurun.',
    'DateAndTime' => 'Tarih ve saat',
    'mCryptWarning' => '"Mcrypt" uzantısı şifreleme düzgün çalışması ilave için yüklü olması gerekir.  Lütfen devam etmek için yükleyin.',
    'APIInCompatibleWithEncryptionLevel' => 'API kullanıcı şifreleme düzeyi şifrelenmiş veritabanı ilave ile uyumlu değil.',
    'UnauthenticatedAccessInAPI' => 'Kimliği doğrulanmamış erişim.  Lütfen giriş yapın veya SimpleRisk API kullanmak için bir anahtarı verin.',
    'ResetPasswordMessageInUserLevelEncryption' => 'Bu kullanıcının kullanıcı düzeyinde şifreleme olduğundan parolayı sıfırlayabilir değil. Lütfen yöneticinize başvurun.',
    'YouNeedToSpecifyAnIdParameter' => 'Bir kimliği parametresi belirtmeniz gerekir.',
    'NoMitigation' => 'Belirtilen hiçbir azaltıcı etken vardır.',
    'NoReview' => 'Belirtilen hiçbir inceleme \'s.',
    'MysqldumpPathWasSavedSuccessfully' => 'Mysqldump yolu başarıyla kaydedildi.',
    'UnavailableMysqldumpService' => 'Sunucu üzerinde hiçbir avaiable \'mysqldump\' hizmeti vardır. Lütfen mutlak mysqldump hizmet yolu ayarlayın.',
    'AllOpenRisksByTeamByLevel' => 'Ekip tarafından Risk düzeyine göre tüm açık risk',
    'Unknown' => 'Bilinmiyor',
    'AllOwners' =>'Tüm riskler',
    'AllOwnersManagers' => 'Tüm sahibinin yöneticileri',
    'AddNewReviewNamed' => 'Adlı yeni gözden ekle',
    'DeleteCurrentReviewNamed' => 'Şimdiki inceleme adlı silmek',
    'AddNewNextstepNamed' => 'Yeni bir sonraki adım ekle',
    'DeleteCurrentNextstepNamed' => 'Geçerli sonraki adım adlı Sil',
    'Settings' => 'Ayarlar',
    'EnablePopupWindowsForTextBoxes' => 'Metin kutuları için açılır pencereler etkinleştirin',
    'PasswordNoLongerUse' => 'Sen artık kullanabilmek için bu yeni şifreyi sınırlıdır.  Lütfen başka bir parola deneyin',
    'RememberTheLast' => 'RememberTheLast',
    'Passwords' => 'Parolalar',
    'NoOwner' => 'Hayır sahibi',
    'NoOwnersManager' => 'Hayır sahipleri Yöneticisi',
    'RiskAverageOverTime' => 'Zaman aralığında risk ortalama',
    'AverageRiskScore' => 'Ortalama Risk puanı',
    'Year' => 'Yıl',
    'Month' => 'Ay',
    'Day' => 'Gün',
    'FilterByAffectedAsset' => 'Tarafından etkilenen varlık filtre',
    'RisksOpened' => 'Riskleri açıldı',
    'RisksClosed' => 'Kapalı riskleri',
    'HealthCheck' => 'Sistem durumu denetimi',
    'RequirePasswordChangeOnLogin' => 'Oturum açma parola değişiminde gerektirir',
    'PasswordChangeRequired' => 'Oturum açmadan önce parolanızı değiştirmeniz gerekir.',
    'LikelihoodImpact' => 'Olasılığı ve etkisi',
    'MitigationPercent' => 'Azaltma yüzde',
    'MitigationPermissionMessage' => 'Azaltıcı Etkenler planı iznine sahip değil.  Gönderme girişiminde herhangi bir azaltıcı etken kaydedilmez.  Bu iletide hata ulaştınız düşünüyorsanız lütfen yöneticiye başvurun.',
    'ResetCustomDisplaySettings' => 'Özel görüntü ayarlarını sıfırlama',
    'CustomResetSuccessMessage' => 'Özel görüntü ayarlarınızı başarıyla sıfırlandı',
    'DefaultRiskScore' => 'Varsayılan Risk puanı',
    'AdditionalStakeholders' => 'Ek paydaşlar',
    'AllSkateholders' => 'Tüm paydaşların',
    'RiskIdDoesNotExist' => 'Risk kodu yok',
    'RiskTeamPermission' => 'Sen bu riski ait ekibinin bir üyesi değilsin',
    '' => '',
);

?>
